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

// Laravel 8
//Route::get('/', 'App\Http\Controllers\SiteController@index');
use App\Http\Controllers\SiteController;
Route::get('/', [ SiteController::class, 'index' ]);

