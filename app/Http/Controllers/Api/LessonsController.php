<?php

namespace App\Http\Controllers\Api;

use App\User;
use JWTAuth;
use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index()
    {
    	$lessons = Lesson::with('students')->with('teacher')->get();

    	return response()->json($lessons, 200);
    }
}
