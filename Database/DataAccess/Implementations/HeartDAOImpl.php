<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\HeartDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\Heart;

class HeartDAOImpl implements HeartDAO
{
    public function create(Heart $heart): bool
    {
        if ($heart->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $heart->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Heart (user_id, liked_user_id, post_id) VALUES (?,?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'iii',
            [
                $heart->getUserId(),
                $heart->getLikedUserId(),
                $heart->getPostId(),
            ]
        );

        return $result;
    }

    public function delete(Heart $heart): bool
    {
        $id = $heart->getId();

        if ($id === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Heart WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$id]);

        if ($result) {
            // 通知も削除する
            $noticeDao = DAOFactory::getNoticeDAO();
            $notice = $noticeDao->getByReference($id, "Heart");
            $noticeDao->delete($notice);
        }

        return $result;
    }

    public function getById(int $id): ?Heart
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToHeart($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Heart WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToHeart(array $rowData): Heart
    {
        return new Heart(
            userId: $rowData['user_id'],
            likedUserId: $rowData['liked_user_id'],
            postId: $rowData['post_id'],
            id: $rowData['id'],
            timeStamp: new DataTimeStamp($rowData['created_at'], "") ?? null
        );
    }
}