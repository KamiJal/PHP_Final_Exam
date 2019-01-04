<?php
namespace Task_07;

require_once "../SiteManager.php";
require_once "TaskHandler.php";
require_once "Motocycle.php";

use SiteManager;

$data = TaskHandler::Start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 07</title>
    <?= SiteManager::Styles(); ?>

</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 07</h1>
                    <p>Создать класс минимум с 4 полями и методом сериализации. <br>
                        Создать от него объект, заполнить различными данными, сериализовать.
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Сериализация и десериализация объекта класса Motocycle</h5>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Входные данные</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p class="text-muted">__construct(string $name, int $displacement, float $power,
                                    int $fuelTankCapacity, array $suspension)</p>
                                $motocycle = new Motocycle("Kawasaki ZX6R", 636, 122.7, 17,
                                ["frontSuspension" => "41 mm (2 in) inverted cartridge fork with adjustable preload,
                                stepless rebound and compression damping",
                                "rearSuspension" => "Bottom-link Uni-Trak system with gas-charged shock,
                                stepless rebound and compression adjustability",]);
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Сериализованные данные</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $data["serialized"]; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Десериализованный объект</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $data["deserialized"]->ToHtml(); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

</body>
</html>
