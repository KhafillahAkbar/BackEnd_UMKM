<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UmkmRegistController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
});
//Customer 
Route::get('/customer',[CustomerController::class, 'index']);
Route::get('/customer/{id}/detail',[CustomerController::class, 'show']);

//FAQ
Route::get('/faq',[FaqController::class, 'index']);
Route::get('/faq/create',[FaqController::class, 'create']);
Route::post('/faq/store',[FaqController::class, 'store']);
Route::get('/faq/{id}/edit',[FaqController::class, 'edit']);
Route::put('/faq/{id}',[FaqController::class, 'update']);
Route::delete('/faq/{id}',[FaqController::class, 'destroy']);

//UMKM
Route::get('/umkm',[UmkmController::class, 'index']);
Route::get('/umkm/{id}/detail',[UmkmController::class, 'show']);

//Registration
Route::get('/umkm_registration',[UmkmRegistController::class, 'index']);
Route::get('/umkm_registration/{id}/detail',[UmkmRegistController::class, 'show']);
Route::delete('/umkm_registration/{id}',[UmkmRegistController::class, 'destroy']);

//News
Route::get('/news',[NewsController::class, 'index']);
Route::get('/news/create',[NewsController::class, 'create']);
Route::post('/news/store',[NewsController::class, 'store']);
Route::get('/news/{id}/edit',[NewsController::class, 'edit']);
Route::put('/news/{id}',[NewsController::class, 'update']);
Route::delete('/news/{id}',[NewsController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

