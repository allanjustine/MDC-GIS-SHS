<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Normal_View\IndexController;
use App\Http\Controllers\Normal_View\NormalAnnouncementController;
use App\Http\Controllers\Normal_View\NormalContactUsController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ContactUsController;
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

//Pages in normal view
Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [IndexController::class, 'about']);
Route::get('/contact-us', [NormalContactUsController::class, 'contact']);
Route::post('/contact-us', [NormalContactUsController::class, 'contactUsStore'])->name('contact-us.submit');
Route::get('/announcements', [NormalAnnouncementController::class, 'announcement']);
Route::get('/services', [IndexController::class, 'services']);

//For Auth
Route::get('/login', [AuthIndexController::class, 'loginForm']);
Route::post('/login', [AuthIndexController::class, 'login'])->name('login');
Route::post('/logout', [AuthIndexController::class, 'logout'])->name('logout');
// Route::get('/register', [AuthIndexController::class, 'registerForm'])->name('register');


Route::group(['middleware' => ['auth', 'role:admin']], function () {

    //Dashboard Route
    Route::get('/admin/dashboard', [AdminIndexController::class, 'index']);

    //Messages Route
    Route::get('/admin/messages', [ContactUsController::class, 'message']);

    //Announcement Route
    Route::get('/admin/announcements', [AnnouncementController::class, 'announcement']);
    Route::get('/admin/announcements/create', [AnnouncementController::class, 'announcementCreate']);
    Route::post('/admin/announcements/create', [AnnouncementController::class, 'announcementStore'])->name('announcements.create');
    Route::get('/admin/announcements/{announcement}/update', [AnnouncementController::class, 'edit']);
    Route::put('/admin/announcements/{announcement}/update', [AnnouncementController::class, 'update'])->name('admin.announcements.update');
    Route::get('/admin/announcements/{announcement}/confirm-delete', [AnnouncementController::class, 'toDelete']);
    Route::delete('/admin/announcements/{announcement}/confirm-delete', [AnnouncementController::class, 'destroy'])->name('admin.announcements.destroy');
});
Route::group(['middleware' => ['auth', 'role:user']], function () {

    //User Dashboard
    Route::get('/dashboard', [IndexController::class, 'dashboardNormal']);
});
