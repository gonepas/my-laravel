<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Http\Controllers\VoyagerController;

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
    return view('welcome');
})->name('homepage');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/logout', [Controller::class, 'logout'])->name('user_logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
