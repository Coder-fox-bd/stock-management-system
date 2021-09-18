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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', \App\Http\Livewire\Home::class)->name('home');
    Route::get('/roles', \App\Http\Livewire\Roles::class)->name('roles');
    Route::get('/user-roles', \App\Http\Livewire\UserRoles::class)->name('user-roles');
});

