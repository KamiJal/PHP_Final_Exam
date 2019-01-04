<?php

namespace Task_06;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "config.php";
require_once "Logger.php";
require_once "PdoWrapper.php";

class TaskHandler
{
    private static $pdoWrapper;
    private static $sth;
    private static $logger;

    public static function Init()
    {
        if (!self::$logger) {
            self::$logger = new Logger(__DIR__ . DIRECTORY_SEPARATOR . "log.txt");
        }

        if (!self::$pdoWrapper) {
            self::$pdoWrapper = new PdoWrapper(DB_DSN, DB_USER, DB_PASS, DB_OPT, self::$logger);
        }
    }

    public static function ReadLogFile()
    {
        self::Init();
        return self::$logger->ReadLog();
    }

    //QUERIES
    public static function Execute()
    {
        if (!isset(self::$sth)) {
            self::Prepare();
        }

        self::$sth->execute([2]);
    }

    public static function Fetch()
    {
        if (!isset(self::$sth)) {
            self::Execute();
        }

        self::$sth->fetch();
    }

    public static function Prepare(string $query = null)
    {
        self::Init();

        if (!isset($query)) {
            $query = "SELECT * FROM task_06 WHERE id=?";
        }

        self::$sth = self::$pdoWrapper->prepare($query);
    }

    public static function Query()
    {
        self::Init();
        self::$pdoWrapper->query("SELECT * FROM task_06");
    }
}