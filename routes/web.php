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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'web'], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/admin',[App\Http\Controllers\Admin\Dashboard::class, 'login'])->name('admin');
    Route::post('admin-login',[App\Http\Controllers\Admin\Dashboard::class, 'loginUser'])->name('admin-login');


    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});





