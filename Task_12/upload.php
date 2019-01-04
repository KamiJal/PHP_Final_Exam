<?php

namespace Task_12;

require_once "DbManager.php";
require_once "Image.php";
require_once "User.php";

const INTERNAL_SERVER_ERROR = 'Файл не был загружен. Произошла ошибка на сервере. Попробуйте позднее.';

//ИГНОРИРУЕТ ПРЕДУПРЕЖДЕНИЕ 'Warning: POST Content-Length' IN LINE 0
//КОТОРОЕ ВОЗНИКАЕТ, ЕСЛИ ПРЕВЫСИТЬ РАЗМЕР POST_MAX_SIZE В .htaccess
if (!empty(ob_get_clean())) {
    ob_start();
    echo '';
}

function fileErrorCheck(int $error)
{
    switch ($error) {
        case 1:
        case 2:
            return response(false, 'Размер загружаемого файла превысил 2 Мб.');
        case 3:
            return response(false, 'Загружаемый файл был получен только частично.');
        case 4:
            return response(false, 'Файл не был загружен.');
        default:
            return response(false, INTERNAL_SERVER_ERROR);
    }
}

function upload(array $file)
{
    $userSecureHash = $_COOKIE["secure_hash"] ?? "";
    $userIp = $_SERVER["REMOTE_ADDR"];

    //ПРОВЕРЯЕМ ПОЛЬЗОВАТЕЛЯ
    $user = null;
    //достаем пользователя из базы
    if (empty($userSecureHash)) {
        $user = DbManager::GetUserByIp($userIp);
    } else {
        $user = DbManager::GetUserBySecureHash($userSecureHash);
    }

    //если нет такого пользователя, то создаем
    if (is_null($user)) {
        $user = new User($userIp);
        DbManager::SaveUser($user);
    }

    //проверяем лимит загрузок
    if(DbManager::GetImageCountByUserId($user->id) === 20)
        return response(false, 'Вы исчерпали лимит загрузок.');

    //ПРОВЕРЯЕМ ФАЙЛ
    $image = null;
    //проверка кодов ошибок
    if ($file['error'] > 0)
        return fileErrorCheck($file['error']);

    //проверка, что файл - изображение
    if (!Image::isImage($file['tmp_name']))
        return response(false, 'Можно загружать только изображения.');

    $image = new Image($file, $user->id);

    //проверка удачного сохранения картинки
    if (!Image::SaveImage($image) || !DbManager::SaveUserImageData($image)) {
        return response(false, INTERNAL_SERVER_ERROR);
    }

    //если хэша не было в куки, то сохраняем
    if (empty($userSecureHash))
        setcookie("secure_hash", $user->secureHash, time() + 60 * 60 * 24 * 30);

    return response(true, 'Файл успешно загружен.');
}

function response(bool $status, string $message)
{
    return ['status' => ($status ? 'success' : 'error'), 'message' => $message];
}