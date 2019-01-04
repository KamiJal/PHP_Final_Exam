<?php
namespace Task_12;
require_once "upload.php";
require_once "../SiteManager.php";

use SiteManager;

$response = null;

//Игнорируем предупреждение, которое генерируется в связи с превышением POST_MAX_SIZE
if (ob_get_contents() === '') {
    $response = response(false, 'Размер файла превышает 2 Мб.');
}

if (isset($_FILES['fileUpload']))
    $response = upload($_FILES['fileUpload']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 12</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">

    <div class="container-fluid pt-5 mt-5 w-50">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 12</h1>
                    <p>ДОПОЛНИТЕЛЬНАЯ ЗАДАЧА (по желанию). Написать скрипт по загрузке файлов пользователями. <br>
                        Одному пользователю можно загрузить максимум 2 файла. Определять пользователей через cookies.
                        <br> Если значение cookie пользователя пусто, то через $_SERVER[REMOTE_ADDR] (ip-адрес
                        пользователя). <br> Использовать БД для записи пользователя, загруженной им картинки, ip-адреса
                        пользователя
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Выберите картинку для загрузки</h5>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fileUpload" class="text-muted">
                            Загрузить на сервер можно только 2 картинки максимальным размером в 2Мб. </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2048576"/>
                        <input type="file" class="form-control-file" id="fileUpload" name="fileUpload" required>
                        <input type="submit" class="btn btn-dark mt-4" value="Загрузить">
                    </div>
                </form>
            </div>

            <?php if (!is_null($response)) : ?>
                <div class="col-lg-12 mt-4">
                    <div class="alert alert-<?= $response['status'] === 'error' ? 'danger' : 'success' ?>" role="alert">
                        <?= $response['message'] ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>


