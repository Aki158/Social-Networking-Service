<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\Interfaces\RoomDAO;
use Database\DatabaseManager;
use Models\Room;

class RoomDAOImpl implements RoomDAO
{
    public function create(Room $room): bool
    {
        if ($room->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $room->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Room (url) VALUES(?)";

        $result = $mysqli->prepareAndExecute($query,'s',[$room->getUrl()]);

        return $result;
    }

    public function delete(Room $room): bool
    {
        if ($room->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Room WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$room->getId()]);

        return $result;
    }

    public function getById(int $id): ?Room
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToRoom($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Room WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToRoom(array $rowData): Room
    {
        return new Room(
            url: $rowData['url'],
            id: $rowData['id']
        );
    }
}