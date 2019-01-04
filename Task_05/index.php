<?php
namespace Task_05;
require_once "functions.php";
require_once "../SiteManager.php";

use SiteManager;

SetLoginSession($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 05</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 05</h1>
                    <p>Создать форму с любым полем, записать его в сессию, если значение сессии было пустым.
                        Вывести значение на экран</p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Введите ваш логин для записи в сессию</h5>
                <form method="post">
                    <div class="form-group mt-4">
                        <input type="text" class="form-control col-lg-8" id="login" name="login" placeholder="логин"
                               required>
                        <p class="font-weight-light text-muted">Если сессия с идентификатором "login" существует,
                            данные НЕ перезапишутся.</p>
                        <input type="submit" class="btn btn-dark mt-4">
                    </div>
                </form>

            </div>

            <div class="col-lg-12 mt-4">
                <?php if (isset($_SESSION["login"])) : ?>
                    <div class="alert alert-dark" role="alert">
                        <?= $_SESSION["login"] ?>
                    </div>
                <?php else: ?>
                    <p class="h4 text-danger">На текущий момент нет данных о записанной сессии.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>
