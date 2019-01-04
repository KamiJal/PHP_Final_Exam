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
                    <h1>Пожалуйста заполните форму</h1>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <form class="w-50" action="add" method="post" autocomplete="off">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="name" placeholder="название"
                           value="{{$car->name}}" required>
                    <input class="form-control mt-2" type="text" name="body_brand" placeholder="марка кузова"
                           value="{{$car->body_brand}}" required>
                    <input class=" form-control mt-2" type="number" name="weight" placeholder="масса"
                           value="{{$car->weight}}" required>
                    <input class="form-control mt-2" type="number" name="doors_count" placeholder="число дверей"
                           value="{{$car->doors_count}}" required>
                    <input class=" form-control mt-2" type="number" name="horse_power" placeholder="мощность"
                           value="{{$car->horse_power}}" required>
                    <input class="form-control mt-2" type="number" name="year_of_issue" placeholder="год выпуска"
                           value="{{$car->year_of_issue}}" required>
                    <input class=" form-control mt-2" type="text" name="average_fuel_consumption"
                           value="{{$car->average_fuel_consumption}}" placeholder="средний расход топлива" required>

                    <input type="submit" class="btn btn-dark mt-4" value="Сохранить">
                </form>

                <button class="btn btn-danger mt-2" id="cancel">Отмена</button>
            </div>

            @if(!empty($errors))
                <div class="col-lg-12 mt-4">
                    <div class="alert alert-danger w-50">
                        <ul>
                            @foreach($errors as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </div>
    @component('components.footer')
    @endcomponent

    <script rel="stylesheet" src="{{ asset('js/jquery-3.3.1.min.js') }}" charset="UTF-8"></script>
    <script>
        $("#cancel").click(function () {
            window.location.replace("{{action("CarController@Index")}}");
        });


    </script>
</div>
</body>
</html>
