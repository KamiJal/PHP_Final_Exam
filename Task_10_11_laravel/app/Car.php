<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "task_10";

    public static function GenerateCar(array $data = [])
    {
        $car = new Car();
        $car->name = $data["name"] ?? "";
        $car->body_brand = $data["body_brand"] ?? "";
        $car->weight = isset($data["weight"]) ? intval($data["weight"]) : "";
        $car->doors_count = isset($data["doors_count"]) ? intval($data["doors_count"]) : "";
        $car->horse_power = isset($data["horse_power"]) ? intval($data["horse_power"]) : "";
        $car->year_of_issue = isset($data["year_of_issue"]) ? intval($data["year_of_issue"]) : "";
        $car->average_fuel_consumption = isset($data["average_fuel_consumption"]) ? floatval($data["average_fuel_consumption"]) : "";
        return $car;
    }
}
