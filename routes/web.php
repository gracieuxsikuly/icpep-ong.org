<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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
Route::get('/projets', [FrontController::class, 'projets'])->name('projets');
Route::get('/apropos', [FrontController::class, 'about'])->name('about');
Route::get('/evenement', [FrontController::class, 'publications'])->name('publication');
Route::get('/detail-evenemt/{slug}', [FrontController::class, 'detailevenemt'])->name('detailevenemt');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('galery',[FrontController::class,'galery'])->name('galery');

//Backend route

Route::get('/admin/AjoutProjet', [AdminController::class, 'AjoutProjet'])->name('AjoutProjet')->middleware('auth');
Route::get('/admin/AjoutMenu', [AdminController::class, 'AjoutMenu'])->name('AjoutMenu')->middleware('auth');
Route::get('/admin/ListProjet', [AdminController::class, 'ListProjet'])->name('ListProjet')->middleware('auth');
Route::get('/admin/ListMenu', [AdminController::class, 'ListMenu'])->name('ListMenu')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('home');
});
