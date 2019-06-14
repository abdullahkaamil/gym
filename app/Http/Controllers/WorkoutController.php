<?php

namespace App\Http\Controllers;

use App\Member;
use App\workout;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;


class WorkoutController extends Controller
{
    
    public function index()
    {

    }

    public function Workoutplan($id){
        $member = Member::findOrFail($id);
        
        $memberplan = workout::where('member_ID', $member->id)->get();
        $result = json_decode($memberplan);
        dd($result[0]);
        return view("workoutPlan.index", compact('member' , 'memberplan'));
    }


    public function store()
    {
        $member = Input::get('memberid');
        $inputs = Input::get('day');
        $day = Input::get('selectday');
            $work = [
                'member_ID'=> $member,
                'day'=> $day,
                'workout_plan'=> json_encode($inputs)
            ];
        dd($work);
        $workout = new workout($work);
        $workout->save();
            return back();
    }


    public function show($id)
    {
        //
    }

    

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
