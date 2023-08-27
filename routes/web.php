<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
Route::get('/', [FrontController::class, 'index'])->name('acceuil');
Route::get('/services', [FrontController::class, 'services'])->name('service');
Route::get('/apropos', [FrontController::class, 'about'])->name('about');
Route::get('/publications', [FrontController::class, 'publications'])->name('publication');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
