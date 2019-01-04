<?php

namespace Task_02;

use DateTime;

class TaskHandler
{
    private $date;
    private $day;
    private $month;
    private $year;
    public $errorMessage;

    private function __construct(array $data)
    {
        $this->day = intval($data["day"]);
        $this->month = intval($data["month"]);
        $this->year = intval($data["year"]);
        $this->date = DateTime::createFromFormat("d-m-Y", "$this->day-$this->month-$this->year");
        $this->errorMessage = null;
    }

    public static function GetValidDate(array $data)
    {
        if (!(isset($data["day"]) && isset($data["month"]) && isset($data["year"])))
            return null;

        $handler = new TaskHandler($data);

        if (!$handler->IsValidInput()) {
            $handler->errorMessage = "Введите верные значения для полей!";
        } else if (!$handler->IsValidDate()) {
            $handler->errorMessage = "Такой даты не существует!";
        }

        return $handler;
    }

    public function ToString()
    {
        $format = "%d%s %s %04d";
        $dayEnding = $this->day % 10 === 3 ? $this->day !== 13 ? "ье " : "ое " : "ое ";
        return sprintf($format, $this->day, $dayEnding, $this->GetMonthName(), $this->year);
    }

    private function IsValidDate()
    {
        $format = "%02d-%02d-%04d";
        return $this->date->format("d-m-Y") === sprintf($format, $this->day, $this->month, $this->year);
    }

    private function IsValidInput()
    {
        return $this->day > 0 && $this->day < 32
            && $this->month > 0 && $this->month < 13
            && $this->year > 0 && $this->year < 10000;
    }

    private function GetMonthName()
    {
        switch ($this->month) {
            case 1:
                return "января";
            case 2:
                return "февраля";
            case 3:
                return "марта";
            case 4:
                return "апреля";
            case 5:
                return "мая";
            case 6:
                return "июня";
            case 7:
                return "июля";
            case 8:
                return "августа";
            case 9:
                return "сентября";
            case 10:
                return "октября";
            case 11:
                return "ноября";
            case 12:
                return "декабря";
            default:
                return null;
        }
    }


}