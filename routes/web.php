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
Route::post('/car', 'App\Http\Controllers\CARController@storeCARDetails');

// QMR Paper
Route::get('/qmr_paper', 'App\Http\Controllers\QMRPaperController@getData');
Route::post('/qmr_paper', 'App\Http\Controllers\QMRPaperController@storeQMRPaperDetails');

// QMR Non-Paper
Route::post('/qmr_ink', 'App\Http\Controllers\InkController@storeInkDetails');