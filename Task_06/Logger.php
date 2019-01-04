<?php

namespace Task_06;

class Logger
{
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function Log(string $text)
    {
        $handle = fopen($this->filename, "a");

        if (!$handle)
            return;

        fwrite($handle, $text . "|");
        fclose($handle);
    }

    public function ReadLog()
    {
        if (!file_exists($this->filename))
            return null;

        $fileSize = filesize($this->filename);
        if ($fileSize === 0)
            return "";

        $handle = fopen($this->filename, "r");
        $data = fread($handle, $fileSize);
        fclose($handle);

        return trim($data, "|");
    }
}