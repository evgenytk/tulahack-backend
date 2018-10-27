<?php

namespace App\Http\Controllers;

use App\User;
use App\Lesson;
use App\Schedule;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	$user = User::first();

    	$test = \Hash::check('secret', $user->password);
    	// $test = Schedule::first();

    	dd($test);
    }
}
