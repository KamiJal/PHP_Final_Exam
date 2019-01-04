<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task 10</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" charset="UTF-8">

</head>
<body>

@component('components.header')
@endcomponent


<div class="main-wrapper">
    <div class="container-fluid w-50 pt-5 mt-5">
        <div class="row">

            <div class="col-lg-12 text-left">
                <div class="page-header">
                    <h1>Task 10 - 11. Laravel</h1>
                    <ol start="10">
                        <li>Создать страницы для добавления/удаления/отображения автомобилей.<br>
                            Обязательно должна быть создана миграция.<br>
                            Страницы должны иметь хотя бы минимальный дизайн.
                        </li>
                        <li>Добавить свой собственный config файл. <br>
                            Добавить туда адрес любого сайта по программированию. <br>
                            Вывести в виде ссылки в футере базовой заставки.
                        </li>
                    </ol>

                    <p></p>
                    <div class="font-weight-light text-muted"><strong>ВАЖНО: Для экономии пространства 10 и 11 задания
                            объединены.</strong><br>

                        <ol start="10">
                            <li>Таблица для этого задания создана при помощи Migration.<br>
                                Заполнение таблицы выполнено с помощью Seeder. <br>
                                Для возвращения таблицы в исходное состояние выполните команду "php artisan
                                migrate:refresh --seed"
                            </li>
                            <li>Footer на всех страницах подгружает ссылку на сайт портфолио
                                из config-файла "kamijal.php".<br>Вызов хелпера происходит
                                в "resources\views\components\footer.blade.php".
                            </li>
                        </ol>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <form action="car/add" method="get">
                    <input type="submit" class="btn btn-dark" value="Добавить">
                </form>
            </div>

            <div id="carTable" class="col-lg-12 mt-4">
                @if (count($cars) === 0)
                    <h5 class="text-danger">В базе данных записи отсутствуют!</h5>

                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-dark">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Марка кузова</th>
                                <th>Масса авто</th>
                                <th>Число дверей</th>
                                <th>Год выпуска</th>
                                <th>Мощность</th>
                                <th>Средний расход топлива</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td class="w-25">{{ $car->name }}</td>
                                    <td>{{ $car->body_brand }}</td>
                                    <td>{{ $car->weight . " кг"}}</td>
                                    <td>{{ $car->doors_count }}</td>
                                    <td>{{ $car->year_of_issue . " г." }}</td>
                                    <td>{{ $car->horse_power . " л.с." }}</td>
                                    <td>{{ $car->average_fuel_consumption . " л/100км" }}</td>
                                    <td>
                                        <button data-id="{{ $car->id }}" class="btn btn-sm btn-outline-light">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>
    </div>

    @component('components.footer')
    @endcomponent

    <script rel="stylesheet" src="{{ asset('js/jquery-3.3.1.min.js') }}" charset="UTF-8"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("button").click(function () {
            let row = $(this).parent().parent();
            let id = $(this).attr("data-id");
            $.ajax({
                method: "delete",
                url: "{{action("CarController@Delete") . "/"}}" + id,
                success: function () {
                    row.remove();

                    if ($("tbody tr").length === 0) {
                        $("#carTable").html("<h5 class=\"text-danger\">В базе данных записи отсутствуют!</h5>");
                    }
                }
            });
        });


    </script>

</div>
</body>
</html>
