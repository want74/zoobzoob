<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdvancedAuthController;
use App\Http\Controllers\AppointmentController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AdvancedAuthController::class)->group(function(){
    Route::get('/advanced', 'main');
    Route::post('/advanced/problem', 'problem');
    Route::post('/advanced/problem/insert', 'problem_insert');
    Route::post('/advanced/insert', 'insert');
    Route::get('/advanced/problem', 'problem');
    Route::get('/advanced/problem/insert', 'problem_insert');
    Route::get('/advanced/insert', 'insert');
});

Route::controller(AppointmentController::class)->group(function(){
    Route::get('/appointment', 'main');
    Route::get('/appointment/insert', 'insert');
    Route::post('/appointment/insert', 'insert');

});

Route::controller(MainController::class)->group(function(){
    Route::get('/entries', 'entries');
});

Route::controller(ChallengeController::class)->group(function(){
    Route::get('/challenges', 'main');
});
