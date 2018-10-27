<?php

namespace App\Http\Controllers\Api;

use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchedulesController extends Controller
{
    public function index()
    {
    	$schedules = Schedule::with('lesson.teacher')->orderBy('start_date')->get()->groupBy(function($item) {
            return \Carbon\Carbon::parse($item->start_date)->format('d.m.y');
        });

        

    	return response()->json($schedules, 200);
    }

    public function byLesson($lessonId)
    {
    	$schedules = Schedule::orderBy('start_date')->where('lesson_id', $lessonId)->with('lesson')->get();

		return response()->json($schedules, 200);
    }

    // public function byDate($dateString)
    // {
    // 	$date = \Carbon\Carbon::parse($dateString)->format('Y-m-d H:i:s');

    // 	$schedules = Schedule::whereDate('start_date', '>=', $date)->whereDate('start_date', '<=', $date)->get();

    // 	return response()->json($schedules, 200);
    // }
}
