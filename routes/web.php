<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\User\JournalController;
use App\Http\Controllers\User\MenuController;
use App\Http\Controllers\User\ReservationController;
use App\Models\Reservation;

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


Route::get('/',[UserIndexController::class,'index'])->name('home.index');
Route::get('/menu',[MenuController::class,'index'])->name('menu.index');
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/reservation',[ReservationController::class,'index'])->name('reservation.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/journal',[JournalController::class,'index'])->name('journal.index');







Route::group(['middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::post('/login',[AuthController::class,'post_login'])->name('post_login');
    
});
   
Route::group(['middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    
});
