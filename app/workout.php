<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class workout extends Model
{
    protected $table = "workout_plans";

    protected $fillable = [
        'member_ID',
        'day',
        'workout_plan',
    ];
}
