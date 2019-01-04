<?php
namespace Task_04;
require_once "functions.php";
require_once "../SiteManager.php";

use SiteManager;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 04</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5 text-center">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 04</h1>
                    <p>Создать функцию, вычисляющую сумму цифр в числе </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция SumDigitsWithFor использует for()</h5>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-hover mx-auto text-left">
                        <thead>
                        <tr>
                            <th scope="col">Входные данные</th>
                            <th scope="col">Ответ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">(4876524)</td>
                            <td><?= SumDigitsWithFor(4876524) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(<?= PHP_INT_MAX ?>)</td>
                            <td><?= SumDigitsWithFor(PHP_INT_MAX) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(9999999)</td>
                            <td><?= SumDigitsWithFor(9999999) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(24897457)</td>
                            <td><?= SumDigitsWithFor(24897457) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(-504)</td>
                            <td><?= SumDigitsWithFor(-504) ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="font-weight-light text-muted">Функция принимает только integer. Если будет overflow -
                    выбросится
                    исключение. Отрицательное число считается ошибкой и возращается -1</p>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция SumDigitsWithForEach использует foreach()</h5>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-hover text-left">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Входные данные</th>
                            <th scope="col">Ответ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">(4876524)</td>
                            <td><?= SumDigitsWithForEach(4876524) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(<?= PHP_INT_MAX ?>)</td>
                            <td><?= SumDigitsWithForEach(PHP_INT_MAX) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(9999999)</td>
                            <td><?= SumDigitsWithForEach(9999999) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(24897457)</td>
                            <td><?= SumDigitsWithForEach(24897457) ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(-504)</td>
                            <td><?= SumDigitsWithForEach(-504) ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="font-weight-light text-muted">Функция принимает только integer. Если будет overflow -
                    выбросится
                    исключение. Отрицательное число считается ошибкой и возращается -1</p>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>