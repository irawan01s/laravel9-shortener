<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/shorten', [ShortLinkController::class, 'index']);
Route::post('/shorten', [ShortLinkController::class, 'store'])->name('shorten.store');
Route::get('/{shorten}', [ShortLinkController::class, 'show'])->name('shorten.show');
Route::delete('/{shorten}', [ShortLinkController::class, 'destroy'])->name('shorten.destroy');
Route::delete('/{shorten}/stats', [ShortLinkController::class, 'stats'])->name('shorten.stats');
