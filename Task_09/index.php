<?php
namespace Task_09;
require_once "TaskHandler.php";
require_once "../SiteManager.php";

use SiteManager;

$response = TaskHandler::SaveToDb($_POST);
$data = TaskHandler::GetDataFromDb();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 09</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar();
?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 09</h1>
                    <p>Создать форму login, name. Записывать данные с формы в таблицу.
                        Вывести все записи на страницу.</p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Заполните форму</h5>
                <form method="post">
                    <div class="form-group row">
                        <input type="text" class="form-control col-lg-5 ml-3 mr-2" placeholder="login" name="login"
                               required>
                        <input type="text" class="form-control col-lg-5" placeholder="name" name="name" required>
                    </div>
                    <input type="submit" class="btn btn-dark">
                </form>
            </div>

            <?php if ($response["status"] === "error") : ?>
                <div class="col-lg-12 mt-4">
                    <div class="alert alert-danger" role="alert">
                        <?= $response["message"]; ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-12 mt-4">
                <h5>Данные, хранящиеся в таблице в БД</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-dark">
                        <thead>
                        <tr>
                            <th class="w-25">id</th>
                            <th>login</th>
                            <th>name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (is_null($data)) : ?>
                            <tr>
                                <td class="text-danger" colspan="3"><?= "В базе данных записи отсутствуют!" ?></td>
                            </tr>
                        <?php else: ?>

                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?= $row["id"] ?></td>
                                    <td><?= $row["login"] ?></td>
                                    <td><?= $row["name"] ?></td>
                                </tr>
                            <?php endforeach; ?>

                        <?php endif; ?>
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
