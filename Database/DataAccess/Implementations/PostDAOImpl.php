<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\DAOFactory;
use Database\DataAccess\Interfaces\PostDAO;
use Database\DatabaseManager;
use Models\Media;
use Models\Post;

class PostDAOImpl implements PostDAO
{
    public function create(Post $post, ?Media $media): bool
    {
        if ($post->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $post->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Post (user_id, reply_to_id, url, content, post_appointment_time, posted_at) VALUES (?,?,?,?,?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'iissss',
            [
                $post->getUserId(),
                $post->getReplyToId(),
                $post->getUrl(),
                $post->getContent(),
                $post->getPostAppointmentTime(),
                $post->getPostedAt()
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

    public function update(Post $post, string $postedAt): bool
    {
        if ($post->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query =
        <<<SQL
            UPDATE Post
            SET posted_at = ?
            WHERE id = ?
        SQL;

        $result = $mysqli->prepareAndExecute(
            $query,
            'si',
            [
                $postedAt,
                $post->getId(),
            ]
        );

        return $result;
    }

    public function delete(Post $post): bool
    {
        $id = $post->getId();

        if ($id === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Post WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$id]);

        if ($result) {
            // 関連するメディアファイルがあれば削除する
            $mediaDao = DAOFactory::getMediaDAO();
            $media = $mediaDao->getByReference($id, "Post");
            if ($media !== null) $mediaDao->delete($media);
        }
        return $result;
    }

    public function getById(int $id): ?Post
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToPost($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Post WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToPost(array $rowData): Post
    {
        return new Post(
            userId: $rowData['user_id'],
            url: $rowData['url'],
            id: $rowData['id'],
            replyToId: $rowData['reply_to_id'] ?? null,
            content: $rowData['content'] ?? null,
            postAppointmentTime: $rowData['post_appointment_time'] ?? null,
            postedAt: $rowData['posted_at'] ?? null
        );
    }
}