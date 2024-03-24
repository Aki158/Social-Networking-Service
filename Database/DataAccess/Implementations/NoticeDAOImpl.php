<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\Interfaces\NoticeDAO;
use Database\DatabaseManager;
use Models\Notice;

class NoticeDAOImpl implements NoticeDAO
{
    public function create(Notice $notice): bool
    {
        if ($notice->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $notice->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Notice (user_id, visited_id, reference_id, reference_type) VALUES(?,?,?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'iiis',
            [
                $notice->getUserId(),
                $notice->getVisitedId(),
                $notice->getReferenceId(),
                $notice->getReferenceType()
            ]
        );

        return $result;
    }

    public function update(Notice $notice, string $confirmedAt): bool
    {
        if ($notice->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query =
        <<<SQL
            UPDATE Notice
            SET confirmed_at = ?
            WHERE id = ?
        SQL;

        $result = $mysqli->prepareAndExecute(
            $query,
            'si',
            [
                $confirmedAt,
                $notice->getId(),
            ]
        );

        return $result;
    }

    public function delete(Notice $notice): bool
    {
        $id = $notice->getId();

        if ($id === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Notice WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$id]);

        return $result;
    }

    public function getById(int $id): ?Notice
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToNotice($row);
    }

    public function getByReference(int $referenceId, string $referenceType): ?Notice
    {
        $row = $this->getRowByReference($referenceId, $referenceType);

        if($row === null) return null;

        return $this->rowDataToNotice($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Notice WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function getRowByReference(int $referenceId, string $referenceType): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Notice WHERE reference_id = ? AND reference_type = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'is', [$referenceId, $referenceType])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToNotice(array $rowData): Notice
    {
        return new Notice(
            userId: $rowData['user_id'],
            visitedId: $rowData['visited_id'],
            referenceId: $rowData['reference_id'],
            referenceType: $rowData['reference_type'],
            id: $rowData['id'],
            confirmedAt: $rowData['confirmed_at'] ?? null
        );
    }
}