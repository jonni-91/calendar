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

//if(App::getLocale() != 'ru'){
//
//}
//

Route::redirect('/','/ru');
Auth::routes();




Route::group(['prefix' => '{locale}', 'where' =>['locale' => '[a-zA-Z]{2}']], function (){
    Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
    //Route::get('/login', [App\Http\Controllers\SiteController::class, 'login'])->name('login');
    //Route::match(['get','post'], 'register' , function (){
    //    return redirect('/');
    //});
    Route::prefix('persons')->middleware('auth')->group(function (){
        Route::get('/{any}', function () {
            return view('person.index');
        })->where('any', '.*');
        //Route::get('/profile',[App\Http\Controllers\Person\IndexController::class, 'profile'])->name('profile');
        Route::get('/',function () {
            return view('person.index');
        })->name('persons');
        //Route::get('/',[App\Http\Controllers\Person\IndexController::class, 'index'])->name('persons');
        Route::post('/profile', [App\Http\Controllers\Person\IndexController::class, 'edit_avatar'])->name('edit_avatar');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::prefix('storage')->group(function (){
    Route::get('/images/{file}',[App\Http\Controllers\ImagesController::class, 'getImage'])->where(['file' => '.*']);
});



