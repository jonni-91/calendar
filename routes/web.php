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
// OR
//use App\Http\Controllers\SiteController;
//Route::get('/', [ SiteController::class, 'index' ]);
// OR

Auth::routes();
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);


Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

//Route::get('/login', [App\Http\Controllers\SiteController::class, 'login'])->name('login');

Route::match(['get','post'], 'register' , function (){
    return redirect('/');
});

//Route::get('/persons',[App\Http\Controllers\Person\IndexController::class, 'index'])->name('persons');

Route::prefix('persons')->group(function (){ // ->middleware('auth')
    Route::get('/',[App\Http\Controllers\Person\IndexController::class, 'index']);
});
