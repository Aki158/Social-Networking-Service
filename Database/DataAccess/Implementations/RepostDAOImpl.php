<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\RepostDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\Repost;

class RepostDAOImpl implements RepostDAO
{
    public function create(Repost $repost): bool
    {
        if ($repost->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $repost->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Repost (user_id, post_id) VALUES (?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'ii',
            [
                $repost->getUserId(),
                $repost->getPostId(),
            ]
        );

        return $result;
    }

    public function delete(Repost $repost): bool
    {
        $id = $repost->getId();

        if ($id === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Repost WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$id]);

        if ($result) {
            // 通知も削除する
            $noticeDao = DAOFactory::getNoticeDAO();
            $notice = $noticeDao->getByReference($id, "Repost");
            $noticeDao->delete($notice);
        }

        return $result;
    }

    public function getById(int $id): ?Repost
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToRepost($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Repost WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToRepost(array $rowData): Repost
    {
        return new Repost(
            userId: $rowData['user_id'],
            postId: $rowData['post_id'],
            id: $rowData['id'],
            timeStamp: new DataTimeStamp($rowData['created_at'], "") ?? null
        );
    }
}