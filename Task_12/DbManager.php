<?php

namespace Task_12;
require_once "../config.php";
require_once "User.php";
require_once "Image.php";

use PDO;

class DbManager
{
    private static $dbContext = null;

    public static function GetImageCountByUserId(int $userId)
    {
        $sql = "SELECT COUNT(user_id) FROM task_12_images WHERE user_id = ?";
        return self::GetData($sql, [$userId])["COUNT(user_id)"];
    }

    public static function GetUserByIp(string $ip)
    {
        $sql = "SELECT * FROM task_12_users WHERE ip_address = ?";
        $result = self::GetData($sql, [$ip]);
        return is_null($result) ? null : User::CreateFromDbFetch($result);
    }

    public static function GetUserBySecureHash(string $secureHash)
    {
        $sql = "SELECT * FROM task_12_users WHERE secure_hash = ?";
        $result = self::GetData($sql, [$secureHash]);
        return is_null($result) ? null : User::CreateFromDbFetch($result);
    }

    public static function SaveUser(User $user)
    {
        $sql = "INSERT INTO task_12_users (ip_address, secure_hash) VALUES (?,?)";
        return self::SaveData($sql, [$user->ipAddress, $user->secureHash]);
    }

    public static function SaveUserImageData(Image $image)
    {
        $sql = "INSERT INTO task_12_images (user_id, filename) VALUES (?,?)";
        return self::SaveData($sql, [$image->userId, $image->fileName]);
    }

    //PRIVATE
    private static function Init()
    {
        if (is_null(self::$dbContext)) {
            self::$dbContext = new PDO(DB_DSN, DB_USER, DB_PASS, DB_OPT);
        }
    }

    private static function GetData(string $statement, array $parameter)
    {
        self::Init();
        $sth = self::$dbContext->prepare($statement);
        $sth->execute($parameter);
        $result = $sth->fetch();
        return $result ? $result : null;
    }

    private static function SaveData(string $statement, array $parameter)
    {
        self::Init();
        $sth = self::$dbContext->prepare($statement);
        return $sth->execute($parameter);
    }
}