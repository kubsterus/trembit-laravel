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
Route::get('/', [\App\Http\Controllers\PageController::class, 'page'])->name('home');
Route::post('/email/send', [\App\Http\Controllers\EmailController::class, 'send'])->name('form_send');
Route::get('/sitemap.xml', [\App\Http\Controllers\PageController::class, 'sitemap'])->name('sitemap');
Route::get('/htmlmap.html', [\App\Http\Controllers\PageController::class, 'htmlmap'])->name('htmlmap');
Route::get('/{page?}.html', [\App\Http\Controllers\PageController::class, 'page'])->where('page', '.*')->name('page');
//Route::get('/industries/{page?}.html', [\App\Http\Controllers\IndustryController::class, 'page']);
//Route::get('/services/{page?}.html', [\App\Http\Controllers\ServiceController::class, 'page']);
