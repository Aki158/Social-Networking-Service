<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\ProfileDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\Profile;

class ProfileDAOImpl implements ProfileDAO
{
    public function create(Profile $profile): bool
    {
        if ($profile->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $profile->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Profile (user_id) VALUES (?)";

        $result = $mysqli->prepareAndExecute($query, 'i', [$profile->getUserId()]);

        return $result;
    }

    public function update(Profile $profile, string $username, ?int $age, ?string $location, ?string $hobby, ?string $selfIntroduction, ?string $thumbnailPath, ?string $thumbnailUrl): bool
    {
        if ($profile->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query =
        <<<SQL
            UPDATE Profile
            SET age = ?, location = ?, hobby = ?, self_introduction = ?, thumbnail_path = ?, thumbnail_url = ?
            WHERE id = ?
        SQL;

        $result = $mysqli->prepareAndExecute(
            $query,
            'isssssi',
            [
                $age,
                $location,
                $hobby,
                $selfIntroduction,
                $thumbnailPath,
                $thumbnailUrl,
                $profile->getId(),
            ]
        );

        if (!$result) return false;

        // usernameのデータ更新
        $userDao = DAOFactory::getUserDAO();
        $user = $userDao->getById($profile->getUserId());
        $userDao->update($user, $username, null);

        return true;
    }

    public function getById(int $id): ?Profile
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToProfile($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Profile WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToProfile(array $rowData): Profile
    {
        return new Profile(
            userId: $rowData['user_id'],
            id: $rowData['id'],
            age: $rowData['age'] ?? null,
            location: $rowData['location'] ?? null,
            hobby: $rowData['hobby'] ?? null,
            selfIntroduction: $rowData['self_introduction'] ?? null,
            thumbnailPath: $rowData['thumbnail_path'] ?? null,
            thumbnailUrl: $rowData['thumbnail_url'] ?? null,
            timeStamp: new DataTimeStamp($rowData['created_at'], $rowData['updated_at'])
        );
    }
}