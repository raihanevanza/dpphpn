<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkProgramController;
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

Route::get('/', [PageController::class, 'home']);

// ===================== User ===================== //
Route::get('/news/{category}', [PageController::class, 'news']);
Route::get('/catalog', [PageController::class, 'catalog']);
// ===================== User ===================== //

// ===================== Template ===================== //
Route::get('/template/{page}', [PageController::class, 'template']);
// ===================== Template ===================== //

// ===================== Administrator ===================== //
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'authenticate']);
Route::get('/logout', [PageController::class, 'logout']);

Route::middleware('administrator')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/master-news', NewsController::class);
    Route::resource('/master-catalog', CatalogController::class);
    Route::resource('/master-work-program', WorkProgramController::class);
});
// ===================== Administrator ===================== //