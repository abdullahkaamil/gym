<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyMemebersWorkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
            Schema::table('mst_members', function (Blueprint $table) {
                $table->foreign('id','member')->references('member_ID')->on('workout_plans')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('member');
    }
}
