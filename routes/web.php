<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('desafio1','Desafio1Controller');
    Route::group(['prefix' => 'desafio5'], function() {
        Route::resource('tasks', 'Desafio5\TaskController');
        Route::resource('logs', 'Desafio5\LogController');
        // Route::resource('users', 'Admin\ActivoVirtual\ActivosController');
    });
});
