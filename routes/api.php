<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::get('/incidents', 'App\Http\Controllers\IncidentController@index');
Route::resource('/incidents', 'IncidentController');
//Route::post('/incidents/store','IncidentController@store');
//Route::post('/incidents', 'IncidentController@store')->name('incidents.store'); 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

