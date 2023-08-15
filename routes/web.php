<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/profile', [ProfileController::class, 'index']);

// Route::resource('ideas', IdeaController::class);

Route::controller(IdeaController::class)->prefix('ideas')->group(function () {
    Route::get('/', 'index')->name('ideas.index');
    Route::get('/create', 'create')->name('ideas.create');
    Route::post('/{from?}', 'store')->name('ideas.store');
    Route::get('/{idea}', 'show')->name('ideas.show');
    Route::get('/{idea}/edit', 'edit')->name('ideas.edit');
    Route::put('/{idea}', 'update')->name('ideas.update');
    Route::delete('/{idea}', 'destroy')->name('ideas.destroy');
});
