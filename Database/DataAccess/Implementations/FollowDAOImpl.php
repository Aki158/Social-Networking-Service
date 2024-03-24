<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\Interfaces\FollowDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\Follow;

class FollowDAOImpl implements FollowDAO
{
    public function create(Follow $follow): bool
    {
        if ($follow->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $follow->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Follow (user_id, followed_id) VALUES (?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'ii',
            [
                $follow->getUserId(),
                $follow->getFollowedId(),
            ]
        );

        return $result;
    }

    public function delete(Follow $follow): bool
    {
        if ($follow->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Follow WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$follow->getId()]);

        return $result;
    }

    public function getById(int $id): ?Follow
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToFollow($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Follow WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToFollow(array $rowData): Follow
    {
        return new Follow(
            userId: $rowData['user_id'],
            followedId: $rowData['followed_id'],
            id: $rowData['id'],
            timeStamp: new DataTimeStamp($rowData['created_at'], "")
        );
    }
}