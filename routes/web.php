<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;

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
    return view('display');
})->name('display');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::get('/create_member', function () {
    return view('/create_member_trainer/member');
    // return 'hello world';
})->name('create_member');

Route::get('/create_trainer', function () {
    return view('/create_member_trainer/trainer');
    // return 'hello world';
})->name('create_trainer');

Route::POST('/create_member', [MemberController::class, 'create'])->name('add_member');
Route::POST('/create_trainer', [TrainerController::class, 'create'])->name('add_trainer');
