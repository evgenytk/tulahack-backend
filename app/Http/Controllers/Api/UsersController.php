<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index($userType)
    {	
    	if ($userType == 2)
    		$users = User::where('type', $userType)->with('lesson')->get();
    	else
    		$users = User::where('type', $userType)->get();

    	return response()->json($users, 200);
    }

    public function me()
    {
    	# code...
    }
}
