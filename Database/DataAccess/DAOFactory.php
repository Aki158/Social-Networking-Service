<?php

namespace Database\DataAccess;

use Database\DataAccess\Implementations\UserDAOImpl;
use Database\DataAccess\Implementations\ProfileDAOImpl;
use Database\DataAccess\Implementations\FollowDAOImpl;
use Database\DataAccess\Implementations\PostDAOImpl;
use Database\DataAccess\Implementations\RepostDAOImpl;
use Database\DataAccess\Implementations\HeartDAOImpl;
use Database\DataAccess\Implementations\RoomDAOImpl;
use Database\DataAccess\Implementations\MessageDAOImpl;
use Database\DataAccess\Implementations\MediaDAOImpl;
use Database\DataAccess\Implementations\NoticeDAOImpl;
use Database\DataAccess\Interfaces\UserDAO;
use Database\DataAccess\Interfaces\ProfileDAO;
use Database\DataAccess\Interfaces\FollowDAO;
use Database\DataAccess\Interfaces\PostDAO;
use Database\DataAccess\Interfaces\RepostDAO;
use Database\DataAccess\Interfaces\HeartDAO;
use Database\DataAccess\Interfaces\RoomDAO;
use Database\DataAccess\Interfaces\MessageDAO;
use Database\DataAccess\Interfaces\MediaDAO;
use Database\DataAccess\Interfaces\NoticeDAO;
use Helpers\Settings;

class DAOFactory
{
    public static function getUserDAO(): ?UserDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new UserDAOImpl(),
        };
    }

    public static function getProfileDAO(): ?ProfileDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new ProfileDAOImpl(),
        };
    }

    public static function getFollowDAO(): ?FollowDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new FollowDAOImpl(),
        };
    }

    public static function getPostDAO(): ?PostDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new PostDAOImpl(),
        };
    }

    public static function getRepostDAO(): ?RepostDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new RepostDAOImpl(),
        };
    }

    public static function getHeartDAO(): ?HeartDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new HeartDAOImpl(),
        };
    }

    public static function getRoomDAO(): ?RoomDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new RoomDAOImpl(),
        };
    }

    public static function getMessageDAO(): ?MessageDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new MessageDAOImpl(),
        };
    }

    public static function getMediaDAO(): ?MediaDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new MediaDAOImpl(),
        };
    }

    public static function getNoticeDAO(): ?NoticeDAO{
        $driver = Settings::env('DATABASE_DRIVER');

        return match ($driver) {
            'memcached' => null,
            default => new NoticeDAOImpl(),
        };
    }
}
