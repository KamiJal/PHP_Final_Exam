<?php
namespace Task_03;
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
    <title>Task 03</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5 text-center">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 03</h1>
                    <p>Создать функцию вычисления количества повторений символа в строке:
                        <br>
                        funcName(char, string)
                        <br>
                        Например:
                        <br>
                        для funcName(a, abcda) ответ 2
                        <br>
                        для funcName(z, abdddfe e) ответ 0
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция CountLettersInWordWithFor использует for()</h5>
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
                            <td scope="row">(a, abcda)</td>
                            <td><?= CountLettersInWordWithFor("a", "abcda") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(i, supercalifragilisticexpialidocious)</td>
                            <td><?= CountLettersInWordWithFor("i", "supercalifragilisticexpialidocious") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(o, pneumonoultramicroscopicsilicovolcanoconiosis)</td>
                            <td><?= CountLettersInWordWithFor("o", "pneumonoultramicroscopicsilicovolcanoconiosis") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(z, floccinaucinihilipilification)</td>
                            <td><?= CountLettersInWordWithFor("z", "floccinaucinihilipilification") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(ta, antidisestablishmentarianism)</td>
                            <td><?= CountLettersInWordWithFor("ta", "antidisestablishmentarianism") ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="font-weight-light text-muted">Функция принимает только один символ. Если придет больше, метод
                    вернет ошибку в виде -1</p>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция CountLettersInWordWithForEach использует foreach()</h5>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-hover text-left">
                        <thead>
                        <tr>
                            <th scope="col">Входные данные</th>
                            <th scope="col">Ответ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">(a, abcda)</td>
                            <td><?= CountLettersInWordWithForEach("a", "abcda") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(i, supercalifragilisticexpialidocious)</td>
                            <td><?= CountLettersInWordWithForEach("i", "supercalifragilisticexpialidocious") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(o, pneumonoultramicroscopicsilicovolcanoconiosis)</td>
                            <td><?= CountLettersInWordWithForEach("o", "pneumonoultramicroscopicsilicovolcanoconiosis") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(z, floccinaucinihilipilification)</td>
                            <td><?= CountLettersInWordWithForEach("z", "floccinaucinihilipilification") ?></td>
                        </tr>
                        <tr>
                            <td scope="row">(ta, antidisestablishmentarianism)</td>
                            <td><?= CountLettersInWordWithForEach("ta", "antidisestablishmentarianism") ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="font-weight-light text-muted">Функция принимает только один символ. Если придет больше, метод
                    вернет ошибку в виде -1</p>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>