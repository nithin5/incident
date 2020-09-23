<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('incidents', 'IncidentController');
//Route::post('/incidents/store','IncidentController@store');
//Route::get('/incidents', 'App\Http\Controllers\IncidentController@index');
//Route::get('incidents', 'IncidentController@index');
Route::get('/', function () {
    return view('welcome');
});
