<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTask10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_10', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('body_brand', 20);
            $table->unsignedInteger('weight');
            $table->unsignedTinyInteger('doors_count');
            $table->unsignedSmallInteger('horse_power');
            $table->unsignedSmallInteger('year_of_issue');
            $table->float('average_fuel_consumption', 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_10');
    }
}
