<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return to_route('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(MainController::class)->group(function(){
    Route::get('/advanced', 'advanced');
    Route::post('/advanced/problem', 'advanced_problem');
    Route::post('/advanced/problem/insert', 'advanced_problem_insert');
    Route::post('/advanced/insert', 'advanced_insert');
    Route::get('/advanced/problem', 'advanced_problem');
    Route::get('/advanced/problem/insert', 'advanced_problem_insert');
    Route::get('/advanced/insert', 'advanced_insert');
});

