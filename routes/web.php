<?php

use App\Http\Controllers\TitleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Banner;
use App\Models\Map;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;
use Illuminate\Support\Facades\Auth;
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
    $titles = Title::all();
    $banners = Banner::all();
    $maps = Map::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    foreach ($titles as $title) {
        $title->subtitle = str_replace(['(',')','[',']'],['<span>','</span>','<em>','</em>'], $title->subtitle);
    }
    return view('welcome', compact('titles', 'banners', 'maps', 'services', 'testimonials'));
});
Route::get('/admin', function () {
    return view('/back/layouts/admin');
});
Route::get('/dashboard', function () {
    return view('/back/layouts/admin');
})->name('dashboard');

// ------------------ Titles Routes ------------------

    Route::get('/back/titles', [TitleController::class, 'index'])->name('title.index');
    Route::get('/back/titles/{id}/show', [TitleController::class, 'show'])->name('title.show');
    Route::get('/back/titles/{id}/edit', [TitleController::class, 'edit'])->name('title.edit');
    Route::post('/back/titles/{id}/update', [TitleController::class, 'update'])->name('title.update');
    // ------------------ Banners Routes ------------------
    Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
    // ------------------ Service Route ------------------
    Route::resource('/back/service', ServiceController::class);
    // ------------------ User Route ------------------
    Route::resource('/back/user', UserController::class);
    // ------------------ Roles Routes ------------------
    Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
    Route::get('/back/roles/{id}/show', [RoleController::class, 'show'])->name('role.show');
    Route::post('/back/roles/{id}/delete', [RoleController::class, 'destroy'])->name('role.destroy');
    
    


    // ------------------ Testimonial Route ------------------
    Route::resource('/back/testimonial', TestimonialController::class);
    // ------------------ Maps Routes ------------------
    Route::get('/back/maps', [MapController::class, 'index'])->name('map.index');
    Route::get('/back/maps/{id}/show', [MapController::class, 'show'])->name('map.show');
    Route::get('/back/maps/{id}/edit', [MapController::class, 'edit'])->name('map.edit');
    Route::post('/back/maps/{id}/update', [MapController::class, 'update'])->name('map.update');
    
require __DIR__.'/auth.php';
