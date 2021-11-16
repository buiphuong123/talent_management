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

    public function show($scheduleId, $userId){
        $schedule   = Schedule::where('id', $scheduleId)->with('users', function($query) use ($userId){
            return $query->where('users.id', $userId);
        })->first();
        return view('schedule.show', ['schedule' => $schedule]);
    }

    public function delete($scheduleId){
        dd($scheduleId);
    }
}
