<?php

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

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/asto-constitution', function () { return view('constitution'); })->name('constitution');
Route::get('/cwc', function () { return view('cwc'); })->name('cwc');
Route::get('/committees', function () { return view('committee'); })->name('committee');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/document', [App\Http\Controllers\DocumentController::class, 'index'])->name('document.index');
Route::get('/document/{document}', [App\Http\Controllers\DocumentController::class, 'show'])->name('document.show');
Route::get('/document/{document}/stream', [App\Http\Controllers\DocumentController::class, 'stream'])->name('document.steam');

Route::get('/document/year/{year}', [App\Http\Controllers\DocumentController::class, 'year'])->name('document.year');
Route::get('/document/category/{category}', [App\Http\Controllers\DocumentController::class, 'category'])->name('document.category');
