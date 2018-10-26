<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', 'Api\AuthController@login')->middleware('api');

Route::group(['middleware' => 'auth:api', 'prefix' => 'auth', 'namespace' => 'Api'], function () {
    Route::post('logout', 'AuthController@logout');
    Route::get('me', 'AuthController@me');
    Route::get('users/{userType}', 'UsersController@index');

    Route::get('lessons', 'LessonsController@index');
    Route::get('schedules', 'SchedulesController@index');
    Route::get('schedules/lesson/{lessonId}', 'SchedulesController@byLesson');
    // Route::get('schedules/date/{dateString}', 'SchedulesController@byDate');
});