<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ShortLinkController;
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
    return Inertia::render('Welcome', [
        'name' => 'John Doe'
    ]);
});

Route::resource('shorten', ShortLinkController::class);
// Route::get('/shorten', [ShortLinkController::class, 'index'])->name('shorten.index');
// Route::get('/shorten/create', [ShortLinkController::class, 'create'])->name('shorten.create');
// Route::post('/shorten', [ShortLinkController::class, 'store'])->name('shorten.store');
// Route::get('/{shorten}', [ShortLinkController::class, 'show'])->name('shorten.show');
// Route::get('/{id}/edit', [ShortLinkController::class, 'edit'])->name('shorten.edit');
// Route::put('/shorten/{id}', [ShortLinkController::class, 'update'])->name('shorten.update');
// Route::delete('/{shorten}', [ShortLinkController::class, 'destroy'])->name('shorten.destroy');
Route::delete('/{shorten}/stats', [ShortLinkController::class, 'stats'])->name('shorten.stats');
