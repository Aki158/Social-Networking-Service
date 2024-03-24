<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\MessageDAO;
use Database\DatabaseManager;
use Models\DataTimeStamp;
use Models\Message;
use Models\Media;

class MessageDAOImpl implements MessageDAO
{
    public function create(Message $message, Media $media): bool
    {
        if ($message->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $message->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Message (user_id, room_id, secret_content) VALUES(?,?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'iis',
            [
                $message->getUserId(),
                $message->getRoomId(),
                $message->getSecretContent()
            ]
        );

        // メディアデータがあれば、Mediaデータを作成する
        if ($media !== null) {
            $media->setReferenceId($mysqli->insert_id);

            $mediaDao = DAOFactory::getMediaDAO();
            $mediaDao->create($media);
        }

        return $result;
    }

    public function delete(Message $message): bool
    {
        $id = $message->getId();

        if ($id === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Message WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$id]);

        if ($result) {
            // 関連するメディアファイルがあれば削除する
            $mediaDao = DAOFactory::getMediaDAO();
            $media = $mediaDao->getByReference($id, "Message");
            if ($media !== null) $mediaDao->delete($media);

            // 通知も削除する
            $noticeDao = DAOFactory::getNoticeDAO();
            $notice = $noticeDao->getByReference($id, "Message");
            $noticeDao->delete($notice);
        }

        return $result;
    }

    public function getById(int $id): ?Message
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToMessage($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Message WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToMessage(array $rowData): Message
    {
        return new Message(
            userId: $rowData['user_id'],
            roomId: $rowData['room_id'],
            id: $rowData['id'],
            secretContent: $rowData['secret_content'] ?? null,
            timeStamp: new DataTimeStamp($rowData['created_at'], "") ?? null
        );
    }
}