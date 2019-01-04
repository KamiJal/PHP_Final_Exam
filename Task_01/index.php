<?php
namespace Task_01;
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
    <title>Task 01</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">

    <div class="container-fluid pt-5 mt-5 w-50">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 01</h1>
                    <p>Через цикл вывести свое имя
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция CountLettersInWordWithForEach использует for()</h5>
                <div class="alert alert-dark" role="alert">
                    <?php ShowTextUsingLoopWithFor("Kamil"); ?>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Функция CountLettersInWordWithForEach использует foreach()</h5>
                <div class="alert alert-dark" role="alert">
                    <?php ShowTextUsingLoopWithForEach("Ushurbakiyev"); ?>
                </div>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>


