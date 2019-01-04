<?php

namespace Task_08;


class Singleton
{
    private static $instance = null;
    private $guid;

    private function __construct()
    {
        //симуляция уникальных данных
        $this->guid = password_hash("test", PASSWORD_BCRYPT);
    }

    //можно сделать protected, если планируется наследоваться от класса
    private function __clone()
    {
    }

    public static function GetInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}