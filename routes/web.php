<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Normal_View\IndexController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Auth\AuthIndexController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [IndexController::class, 'about']);
Route::get('/contact-us', [IndexController::class, 'contact']);
Route::get('/feedback', [IndexController::class, 'feedback']);
Route::get('/services', [IndexController::class, 'services']);

Route::get('/login', [AuthIndexController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthIndexController::class, 'login']);
Route::post('/logout', [AuthIndexController::class, 'logout'])->name('logout');
Route::get('/register', [AuthIndexController::class, 'registerForm'])->name('register');


Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin/dashboard', [AdminIndexController::class, 'index'])->name('admin.dashboard');
});
