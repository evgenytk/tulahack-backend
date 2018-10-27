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
    	$user = User::where('id', JWTAuth::user()->id)->with('lessons.schedules')->with('lessons.teacher')->get()->first();

    	return response()->json($user->lessons, 200);
    }
}
