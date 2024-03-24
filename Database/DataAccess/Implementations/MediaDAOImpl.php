<?php

namespace Database\DataAccess\Implementations;

use Database\DataAccess\Interfaces\MediaDAO;
use Database\DatabaseManager;
use Models\Media;

class MediaDAOImpl implements MediaDAO
{
    public function create(Media $media): bool
    {
        if ($media->getId() !== null) throw new \Exception('Cannot create row data with an existing ID. id: ' . $media->getId());

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "INSERT INTO Media (reference_id, reference_type, image_path, thumbnail_path, image_url, video_path) VALUES (?,?,?,?,?,?)";

        $result = $mysqli->prepareAndExecute(
            $query,
            'isssss',
            [
                $media->getReferenceId(),
                $media->getReferenceType(),
                $media->getImagePath(),
                $media->getThumbnailPath(),
                $media->getImageUrl(),
                $media->getVideoPath(),
            ]
        );

        return $result;
    }

    public function delete(Media $media): bool
    {
        if ($media->getId() === null) throw new \Exception('The specified user has no ID.');

        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "Delete FROM Media WHERE id = ?";

        $result = $mysqli->prepareAndExecute($query, 'i', [$media->getId()]);

        return $result;
    }

    public function getById(int $id): ?Media
    {
        $row = $this->getRowById($id);

        if($row === null) return null;

        return $this->rowDataToMedia($row);
    }

    public function getByReference(int $referenceId, string $referenceType): ?Media
    {
        $row = $this->getRowByReference($referenceId, $referenceType);

        if($row === null) return null;

        return $this->rowDataToMedia($row);
    }

    private function getRowById(int $id): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Media WHERE id = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'i', [$id])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function getRowByReference(int $referenceId, string $referenceType): ?array
    {
        $mysqli = DatabaseManager::getMysqliConnection();

        $query = "SELECT * FROM Media WHERE reference_id = ? AND reference_type = ?";

        $result = $mysqli->prepareAndFetchAll($query, 'is', [$referenceId, $referenceType])[0] ?? null;

        if ($result === null) return null;

        return $result;
    }

    private function rowDataToMedia(array $rowData): Media
    {
        return new Media(
            referenceId: $rowData['reference_id'],
            referenceType: $rowData['reference_type'],
            id: $rowData['id'],
            imagePath: $rowData['image_path'] ?? null,
            thumbnailPath: $rowData['thumbnail_path'] ?? null,
            imageUrl: $rowData['image_url'] ?? null,
            videoPath: $rowData['video_path'] ?? null
        );
    }
}