<?php
require_once "SiteManager.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Экзамен по PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css" charset="UTF-8">
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-dark justify-content-end pr-5 fixed-top">
        <a class="navbar-brand text-uppercase" href="http://localhost:8080/EXAM">главная</a>
    </nav>
</header>

<div class="main-wrapper">

    <div class="container-fluid pt-5 mt-5 w-50">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Экзаменационная работа</h1>
                    <p class="h5">Подготовил: <strong>Камиль Ушурбакиев</strong></p>
                    <p class="font-weight-light text-muted">ВАЖНО: перед работой импортируйте файл БД "kamijalexam".</p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-dark table-hover table-stripped w-75">
                        <thead>
                        <tr>
                            <th>
                                Наименование задания
                            </th>
                        </tr>
                        </thead>
                        <tbody class="font-weight-bold">
                        <tr>
                            <td><a class="text-muted" href="task_01">Task 01</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_02">Task 02</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_03">Task 03</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_04">Task 04</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_05">Task 05</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_06">Task 06</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_07">Task 07</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_08">Task 08</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_09">Task 09</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_10_11_laravel/public">Task 10-11. Laravel</a></td>
                        </tr>
                        <tr>
                            <td><a class="text-muted" href="task_12">Task 12</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <footer class="text-center bg-dark p-5 mt-5">
        <a class="text-muted" href="https://kamijal.portfoliobox.net/" target="_blank">&copy; 2018 Kamil
            Ushurbakiyev</a>
    </footer>
</div>

</body>
</html>


