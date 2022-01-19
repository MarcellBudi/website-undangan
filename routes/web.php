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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'tentang'])->name('tentang');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('whatsapp');
Route::get('/balinese', [App\Http\Controllers\ThemeController::class, 'balinese'])->name('balinese');
Route::get('/invitation/{user_id}', [App\Http\Controllers\CustomerController::class, 'index'])->name('my-invitation');
Route::get('/invitation/{user_id}/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('create-invitation');
Route::get('/{user_id}/edit/{pengantin_id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-invitation');
Route::get('/{user_id}/hapus/{pengantin_id}', [App\Http\Controllers\CustomerController::class, 'hapus'])->name('hapus-invitation');
Route::get('/invitation/{user_id}/finish/{slug}', [App\Http\Controllers\CustomerController::class, 'finish'])->name('finish-invitation');
Route::get('/{slug}/', [App\Http\Controllers\InviteController::class, 'index'])->name('invite');
Route::post('/invitation', [App\Http\Controllers\CustomerController::class, 'store'])->name('store');
Route::post('/invitation/edit', [App\Http\Controllers\CustomerController::class, 'update'])->name('update');