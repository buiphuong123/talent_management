<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request){
        if($request->get('search') != null){
            $schedules = Schedule::where('schedule_name', 'like', '%'. $request->get('search') .'%')->with('users')->get();
        }else {
            $schedules = Schedule::all()->load('users');
        }
        return view('schedule.index', ['schedules' => $schedules]);
    }

    public function show(Request $request){
        return view('schedule.show');
    }
}
