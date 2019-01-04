<?php
namespace Task_08;

require_once "../SiteManager.php";
require_once "Singleton.php";

use SiteManager;

$test_01 = Singleton::GetInstance();
$test_02 = Singleton::GetInstance();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 08</title>
    <?= SiteManager::Styles(); ?>
</head>
<body>

<?= SiteManager::NavBar(); ?>

<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 08</h1>
                    <p>Реализовать паттерн singleton на PHP.</p>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <h5>Класс Singleton в варианте Lazy</h5>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Реализация класса</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div><span class="text-warning">class</span> Singleton</div>
                                {
                                <div class="pl-5">
                                    <div><span class="text-warning">private static </span> $instance = <span class="text-warning">null;</span></div>
                                    <div><span class="text-warning">private</span> $guid;</div>
                                    <br>
                                    <div><span class="text-warning">private function</span> <span class="text-info">__construct</span>()</div>
                                    {
                                    <div class="pl-5">
                                        <div class="text-muted">//симуляция уникальных данных</div>
                                        <div>$this->guid = password_hash(<span class="text-success">"test"</span>, PASSWORD_BCRYPT);</div>
                                    </div>
                                    }
                                    <br>
                                    <br>

                                    <div class="text-muted">//можно сделать protected, если планируется наследоваться от класса</div>
                                    <div><span class="text-warning">private function</span> <span class="text-info">__clone</span>() {}</div>
                                    <br>

                                    <div><span class="text-warning">public static function</span><span class="text-info"> GetInstance()</span></div>
                                    { <br>
                                    <div class="pl-5">
                                        <div><span class="text-warning">if</span> (is_null(self::$instance)) {</div>
                                        <div class="pl-5"><span class="text-warning">self</span>::$instance = <span class="text-warning">new self();</span></div>
                                        }
                                        <div><span class="text-warning">return self</span>::$instance;</div>
                                    </div>
                                    }
                                </div>
                                }
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th>Проверка</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>$test_01 = Singleton::GetInstance();</td>
                            <td><?php var_dump($test_01); ?></td>
                        </tr>
                        <tr>
                            <td>$test_02 = Singleton::GetInstance();</td>
                            <td><?php var_dump($test_02); ?></td>
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
