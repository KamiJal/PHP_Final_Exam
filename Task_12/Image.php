<?php

namespace Task_12;


class Image
{
    public $fileName;
    public $tmpFilePath;
    public $userId;

    public function __construct(array $file, int $userId)
    {
        $this->fileName = $file["name"];
        $this->tmpFilePath = $file['tmp_name'];
        $this->userId = $userId;
    }

    public static function isImage(string $filePath)
    {
        //явное игнорирование предупреждений
        return @is_array(getimagesize($filePath)) ? true : false;
    }


    public static function SaveImage(Image $image)
    {
        $destination = __DIR__ . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $image->userId . DIRECTORY_SEPARATOR;
        @mkdir($destination);

        //явное игнорирование предупреждений
        return @move_uploaded_file($image->tmpFilePath, $destination . $image->fileName);
    }

}