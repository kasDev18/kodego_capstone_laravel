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

Route::get('/', function () {
    return json_encode(['title' => 'qui est esse']);
});

// Route::post('/tasks', 'App\Http\Controllers\Controller@postTask');

// Route::get('/car', 'App\Http\Controllers\CARController@store');
Route::post('/car', 'App\Http\Controllers\CARController@storeCARDetails');