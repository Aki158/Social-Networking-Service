<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\UserDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\User;
use Models\Profile;

class UserDAOImpl implements UserDAO
{
    public function create(User $user, string $password): bool
    {
        if ($user->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $user->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO User (username, email, user_type, password) VALUES (?, ?, ?, ?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'ssss',
            [
                $user->getUsername(),
                $user->getEmail(),
                $user->getUserType(),
                password_hash($password, PASSWORD_DEFAULT) // store the hashed password
            ]
        );

        if (!$result) return false;

        // UserとProfileは1対1の関係であるため、Userデータ作成時にProfileデータも作成し同期させる
        $id = $mysqli->insert_id;
        $profile = new Profile(userId: $id);
        $profileDao = DAOFactory::getProfileDAO();
        $profileDao->create($profile);

        return true;
    }

    public function update(User $user, string $username, ?string $emailConfirmedAt): bool
    {
        if ($user->getId() === null) throw new \Exception('The specified user has no ID.');

        // プロフィール編集時は、usernameのみ変更されるため、emailConfirmedAtには、前回値を代入する
        if ($emailConfirmedAt === null) {
            $emailConfirmedAt = $user->getEmailConfirmedAt();
        }

        $mysqli = DatabaseManager::getMysqliConnection();

        $query =
        <<<SQL
            UPDATE User
            SET sername = ?, email_confirmed_at = ?
            WHERE id = ?
        SQL;

        $result = $mysqli->prepareAndExecute(
            $query,
            'ssi',
            [
                $username,
                $emailConfirmedAt,
                $user->getId(),
            ]
        );

        return $result;
    }

    public function getById(int $id): ?User
    {
        $row = $this->getRowById($id);
        if($row === null) return null;

        return $this->rowDataToUser($row);
    }

    public function getByEmail(string $email): ?User
    {
        $row = $this->getRowByEmail($email);
        if($row === null) return null;

        return $this->rowDataToUser($row);
    }

    public function getHashedPasswordById(int $id): ?string
    {
        return $this->getRowById($id)['password']??null;
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM User WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function getRowByEmail(string $email): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM User WHERE email = ?";

        $result = $mysqli->prepareAndFetchAll($query, 's', [$email])[0] ?? null;

        if ($result === null) return null;
        return $result;
    }

    private function rowDataToUser(array $rowData): User
    {
        return new User(
            username: $rowData['username'],
            email: $rowData['email'],
            userType: $rowData['user_type'],
            id: $rowData['id'],
            emailConfirmedAt: $rowData['email_confirmed_at'] ?? null,
            timeStamp: new DataTimeStamp($rowData['created_at'], $rowData['updated_at'])
        );
    }
}