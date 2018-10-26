<?php

namespace App\Http\Controllers\Api;

use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index()
    {
    	$lessons = Lesson::with('teacher')->with('students')->get();

    	return response()->json($lessons, 200);
    }
}
