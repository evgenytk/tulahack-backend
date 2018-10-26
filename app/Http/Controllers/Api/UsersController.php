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
    		$users = User::where('type', $userType)->with('lead')->get();
    	
    	if ($userType == 1) 
    		$users = User::where('type', $userType)->with('lessons')->get();

    	return response()->json($users, 200);
    }

    
}
