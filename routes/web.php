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

// Route::get('/', function () {
//     return json_encode(['title' => 'qui est esse']);
// });

// CAR
Route::get('/car', 'App\Http\Controllers\CARController@getData');
Route::post('/car', 'App\Http\Controllers\CARController@storeCARDetails');
Route::delete('/car', 'App\Http\Controllers\CARController@deleteData');
Route::patch('/car', 'App\Http\Controllers\CARController@updateData');

// QMR Paper
Route::get('/qmr_paper', 'App\Http\Controllers\QMRPaperController@getData');
Route::post('/qmr_paper', 'App\Http\Controllers\QMRPaperController@storeQMRPaperDetails');
Route::delete('/qmr_paper', 'App\Http\Controllers\QMRPaperController@deleteData');
Route::patch('/qmr_paper', 'App\Http\Controllers\QMRPaperController@updateData');

// QMR Non-Paper
Route::get('/qmr_ink', 'App\Http\Controllers\InkController@getData');
Route::post('/qmr_ink', 'App\Http\Controllers\InkController@storeInkDetails');
Route::delete('/qmr_ink', 'App\Http\Controllers\InkController@deleteData');
Route::patch('/qmr_ink', 'App\Http\Controllers\InkController@updateData');

// Dashboard
Route::get('/dashboard/qmr_paper', 'App\Http\Controllers\DashboardController@getQMRPaperCount');
Route::get('/dashboard/qmr_ink', 'App\Http\Controllers\DashboardController@getQMRInkCount');
Route::get('/dashboard/car', 'App\Http\Controllers\DashboardController@getCARCount');
