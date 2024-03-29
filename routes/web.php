<?php

use App\Http\Controllers\PunchController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');
Route::post('/tasks', [TasksController::class, 'store'])->name('taskstore');
Route::put('/profile', 'ProfileController@update')->name('profile.update');


Route::get('/punch', [PunchController::class, 'index'])->name('punch');
Route::get('/users', [UsersController::class, 'index'])->name('users');


Route::get('/about', function () {
    return view('about');
})->name('about');
