<?php

use App\Http\Controllers\TitleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MapController;
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
Route::get('/admin', function () {
    return view('/back/layouts/admin');
});
Route::get('/dashboard', function () {
    return view('/back/layouts/admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('/back/title', TitleController::class);
Route::resource('/back/banner', BannerController::class);
Route::resource('/back/service', ServiceController::class);
Route::resource('/back/testimonial', TestimonialController::class);
Route::get('/back/maps', [MapController::class, 'index'])->name('map.index');
Route::get('/back/maps/{id}/show', [MapController::class, 'show'])->name('map.show');
Route::get('/back/maps/{id}/edit', [MapController::class, 'edit'])->name('map.edit');
Route::post('/back/maps/{id}/update', [MapController::class, 'update'])->name('map.update');
