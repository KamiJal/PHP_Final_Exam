<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CarController extends Controller
{

    public function Index()
    {
        $cars = Car::all();
        return view("car.carlist", ["cars" => $cars,]);
    }

    public function Add(Request $request)
    {
        $errors = [];
        $car = Car::GenerateCar($request->all());

        if ($request->isMethod("GET")) {
            return view("car.carform", ["car" => $car, "errors" => $errors]);
        }

        $errors = $this->ValidateModel($car);

        if (!empty($errors))
            return view("car.carform", ["car" => $car, "errors" => $errors]);

        $car->save();
        return Redirect::action('CarController@Index');
    }

    private function ValidateModel(Car $car)
    {

        $errors = [];

        if (strlen($car->name) > 255 || strlen($car->name) < 1) {
            $errors[] = "Название: от 1 до 255 знаков.";
        }

        if (strlen($car->body_brand) > 20 || strlen($car->body_brand) < 1) {
            $errors[] = "Марка кузова: от 1 до 20 знаков.";
        }

        if ($car->weight > 7500 && $car->weight < 500) {
            $errors[] = "Масса: от 500 до 7500 кг";
        }

        if ($car->doors_count > 5 || $car->doors_count < 2) {
            $errors[] = "Число дверей: от 2 до 5";
        }

        if ($car->horse_power > 2000 || $car->horse_power < 50) {
            $errors[] = "Мощность: от 50 до 2000 л.с.";
        }

        if ($car->year_of_issue > intval(date("Y")) || $car->year_of_issue < 1950) {
            $errors[] = "Год выпуска: от 1950 г. до " . date("Y");
        }

        if ($car->average_fuel_consumption > 50 || $car->average_fuel_consumption < 1) {
            $errors[] = "Средний расход топлива: от 1 до 50 л/100км";
        }

        return $errors;
    }


    public function Delete($id = null)
    {
        if (is_null($id)) {
            abort(404);
        }

        $car = Car::find($id);

        if (is_null($car)) {
            abort(404);
        }

        $car->delete();
    }

}
