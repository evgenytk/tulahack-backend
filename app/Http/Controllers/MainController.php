<?php

namespace App\Http\Controllers;

use App\User;
use App\Lesson;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	$test = User::find(11)->lead;

    	dd($test);
    }
}
