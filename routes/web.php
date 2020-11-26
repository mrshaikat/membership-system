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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', 'App\Http\Controllers\Auth\RegisterController@showAllUser');

Route::get('dashboard', 'App\Http\Controllers\Auth\RegisterController@showDashboard') -> name('user.dashboard');

Route::resource('role', 'App\Http\Controllers\RoleController');
Route::resource('user', 'App\Http\Controllers\UserController');

Route::get('admin', 'App\Http\Controllers\AdminAuthController@loginPage') -> name('admin.login');
Route::post('admin', 'App\Http\Controllers\AdminAuthController@login') -> name('admin.login');
Route::get('admin-register', 'App\Http\Controllers\AdminAuthController@registerPage') -> name('admin.register');
Route::post('admin-register', 'App\Http\Controllers\AdminAuthController@registerAdmin') -> name('admin.register');
Route::get('admin-dashboard', 'App\Http\Controllers\AdminAuthController@dashboard')-> name('admin.dash');