<?php
namespace Task_06;

require_once "TaskHandler.php";
require_once "../SiteManager.php";

use SiteManager;

$logs = TaskHandler::ReadLogFile();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 06</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 06</h1>
                    <p>Создать класс обертку над операциями PDO (extends PDO),
                        который будет записывать все действия в log файл.
                        <br> Например:
                        <br>obj→execute() Вызовет метод execute PDO класса и запишет *Текущая дата* action=execute
                        <br>obj→prepare() Вызовет метод prepare PDO класса и запишет 2018-12-23 20:20:00 action=prepare
                    </p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Нажмите на любую кнопку для симуляции работы с БД</h5>
                <p class="font-weight-light text-muted">ВАЖНО: команды "prepare" и "query" выполняют только одну
                    команду, "execute" - две, а "fetch" - три. <br> Следовательно, логируются в таком же количестве.</p>
                <div class="btn-group mt-1" role="group" aria-label="Basic example">
                    <input type="submit" class="btn btn-dark" id="prepare" value="prepare">
                    <input type="submit" class="btn btn-dark" id="fetch" value="fetch">
                    <input type="submit" class="btn btn-dark" id="query" value="query">
                    <input type="submit" class="btn btn-dark" id="execute" value="execute">
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-dark">
                        <thead>
                        <tr>
                            <th>Записанные логи</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                        <?php if (!empty($logs)): ?>
                            <?php foreach (explode("|", $logs) as $log) : ?>
                                <tr>
                                    <td><?= $log ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <td class="text-danger"><?= "Данные в логах отсутствуют!" ?></td>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <?= SiteManager::Footer(); ?>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/Task_06.js"></script>
</body>
</html>
