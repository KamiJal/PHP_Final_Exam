<?php

namespace Task_09;
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config.php";

use PDO;

class TaskHandler
{
    private static $dbContext = null;

    private static function Init()
    {
        if (is_null(self::$dbContext)) {
            self::$dbContext = new PDO(DB_DSN, DB_USER, DB_PASS, DB_OPT);
        }
    }

    public static function SaveToDb(array $data)
    {
        if (!isset($data["name"]) && !isset($data["login"]))
            return ["status" => "init"];

        if (empty($data["name"]) && empty($data["login"]))
            return ["status" => "error", "message" => "Поля не могут быть пустыми!"];

        if (strlen($data["name"]) > 255 || strlen($data["login"]) > 255)
            return ["status" => "error", "message" => "Слово должно быть не больше 255 символов!"];

        self::Init();
        $sth = self::$dbContext->prepare("INSERT INTO task_09 (login, name) VALUES(?, ?);");
        $sth->execute([$data["login"], $data["name"]]);

        return ["status" => "success"];
    }

    public static function GetDataFromDb()
    {
        self::Init();
        $sth = self::$dbContext->query("SELECT * FROM task_09");
        $data = $sth->fetchAll();
        return empty($data) ? null : $data;
    }
}