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

Route::get('/', function () {
    
    return view('welcome');
});



Auth::routes();

    
Route::get('/tests', [App\Http\Controllers\TestController::class, 'index'])->name('tests');
Route::get('/tests/{id}', [App\Http\Controllers\TestController::class, 'show'])->name('show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
