<?php
namespace Task_02;
require_once "../SiteManager.php";
require_once "TaskHandler.php";

use SiteManager;

$handler = TaskHandler::GetValidDate($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 02</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid pt-5 mt-5 w-50">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 02</h1>
                    <p>Создать форму с полями день, месяц, год. Вывести дату на страницу в формате число с окончанием,
                        месяц
                        прописью и год. Обратите внимание на пункт с валидацией указанный выше.
                        <br>Например:
                        <br>1ое января 2018
                        <br>3ье сентября 2015
                        <br>22ое марта 2002
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <form method="post">
                    <div class="row">

                        <div class="col-lg-4 col-md-12">
                            <label for="day">Число: </label>
                            <input type="number" id="day" name="day" required>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="month">Месяц: </label>
                            <input type="number" id="month" name="month" required>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="year">Год: </label>
                            <input type="number" id="year" name="year" required>
                        </div>

                    </div>

                    <p class="text-muted">Число: от 1 до 31, месяц от 1 до 31, год: от 1 до 9999</p>

                    <input type="submit" class="btn btn-dark mt-4">

                </form>

            </div>

            <?php if (isset($handler)) : ?>

                <div class="col-lg-12 mt-5">
                    <?php if (isset($handler->errorMessage)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $handler->errorMessage ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-success" role="alert">
                            <?= $handler->ToString() ?>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif; ?>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>