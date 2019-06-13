<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkoutPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plans', function (Blueprint $table) {
            $table->increments('w_ID', true);
            $table->integer('member_ID')->unsigned();
            $table->integer('day');
            $table->text('workout_plan')->nullable();
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
        Schema::drop('workout_plans');
    }
}
