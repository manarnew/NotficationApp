<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\userController;
use App\Http\controllers\AdminController;
use App\Http\Middleware\ifAdminMiddleware;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin route
route::middleware(['auth','verified'])->group(function(){
route::controller(AdminController::class)->group(function(){
    Route::get('/','dashboard');
    Route::get('/view_card','view_card');
    Route::post('/add_card','add_card');
    Route::get('/show_notfication','show_notfication');
    Route::get('/delete_card/{id}','delete_card');
    Route::get('/update_card/{id}','update_card');
    Route::post('/edit_card/{id}','edit_card');
    Route::get('/details/{id}','details');

    Route::get('/view_job','view_job');
    Route::post('/add_job','add_job');
    Route::get('/delete_job/{id}','delete_job');
    Route::get('/endCard','endCard');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/card_search','card_search');
    route::get('/ChoseEmail','ChoseEmail');
    Route::post('/choseUserForNotification','choseUserForNotification');
});

route::get('/show_user',[userController::class,'show_user']);
route::get('/delete_user/{id}',[userController::class,'delete_user']);
});





