<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdvancedAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ChallengeController;

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

Route::get('/', function(){
    return redirect('/home');
});

Auth::routes();

Route::name('/home')->group(function (){
    Route::view('/home','home')->name('home')->middleware('auth');
    Route::get('/home', [\App\Http\Controllers\GuideController::class,'getData'])->middleware('auth');
});
Route::name('/guides')->group(function(){
    Route::view('/guides', 'guides')->name('guides');
    Route::get('/guides', [\App\Http\Controllers\guidesController::class,'getData']);
});
Route::name('/records')->group(function(){
    Route::view('/records', 'records')->name('records');
    Route::get('/records', [\App\Http\Controllers\GuideController::class,'getRecordData']);
});
Route::name('/userPage')->group(function(){
    Route::view('/userPage', 'userPage')->name('userPage');
    Route::get('/userPage', [\App\Http\Controllers\GuideController::class,'getUserData']);
});
Route::get('/guides/id', [\App\Http\Controllers\guidesController::class,'getDataGuide'])->name('guidelink');
Route::view('/guide', 'guide')->name('guide');
Route::post('/editUser', [\App\Http\Controllers\userController::class, 'editUser'])->name('editUser');
Route::post('/insertguide', [\App\Http\Controllers\GuideController::class, 'insertGuide'])->name('insertGuide');
Route::get('/editGuide', [\App\Http\Controllers\GuideController::class, 'editGuide'])->name('guideEdit');
Route::get('/deleteGuide', [\App\Http\Controllers\GuideController::class, 'deleteGuide'])->name('deleteGuide');
Route::get('/insertRecord', [\App\Http\Controllers\recordController::class, 'insertRecord'])->name('insertRecord');
Route::post('/editRecord', [\App\Http\Controllers\recordController::class, 'editRecord'])->name('editRecord');
Route::get('/deleteRecord', [\App\Http\Controllers\recordController::class, 'deleteRecord'])->name('deleteRecord');
Route::post('/endRecord', [\App\Http\Controllers\recordController::class, 'endRecord'])->name('endRecord');
Route::controller(AdvancedAuthController::class)->group(function(){
    Route::view('/captcha','captcha')->name('captcha');
    Route::get('/advanced', 'main');
    Route::post('/advanced/problem', 'problem');
    Route::get('/advanced/problem', 'problem');
    Route::post('/advanced/problem/insert', 'problem_insert');
    Route::get('/advanced/problem/insert', 'problem_insert');
    Route::post('/advanced/insert', 'insert');
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
    Route::get('/challenges/update', 'update');
    Route::post('/challenges/update', 'update');
});
