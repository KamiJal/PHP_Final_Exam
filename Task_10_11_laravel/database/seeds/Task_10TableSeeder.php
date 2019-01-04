<?php

use Illuminate\Database\Seeder;

class Task_10TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_10')->insert([
            'name' => "Mitsubishi FTO",
            'body_brand' => "DE3A",
            'weight' => 1150,
            'year_of_issue' => 1994,
            'doors_count' => 2,
            'horse_power' => 180,
            'average_fuel_consumption' => 8.2,
        ]);

        DB::table('task_10')->insert([
            'name' => "Subaru Impreza",
            'body_brand' => "GF8",
            'weight' => 1185,
            'year_of_issue' => 1998,
            'doors_count' => 5,
            'horse_power' => 125,
            'average_fuel_consumption' => 12.1,
        ]);

        DB::table('task_10')->insert([
            'name' => "Hyundai i30",
            'body_brand' => "GD",
            'weight' => 1220,
            'year_of_issue' => 2015,
            'doors_count' => 5,
            'horse_power' => 130,
            'average_fuel_consumption' => 9.5,
        ]);

        DB::table('task_10')->insert([
            'name' => "Volkswagen Tiguan",
            'body_brand' => "5N1",
            'weight' => 1646,
            'year_of_issue' => 2015,
            'doors_count' => 5,
            'horse_power' => 180,
            'average_fuel_consumption' => 11.6,
        ]);

        DB::table('task_10')->insert([
            'name' => "Volkswagen Passat",
            'body_brand' => "3B2",
            'weight' => 1585,
            'year_of_issue' => 1999,
            'doors_count' => 4,
            'horse_power' => 193,
            'average_fuel_consumption' => 16.2,
        ]);
    }
}
