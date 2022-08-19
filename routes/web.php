<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//     return view('/Client/home');
// });
Route::get('/', [HomeController::class, 'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::prefix('dashboard')->group( function(){
        Route::get('/about_me', [AdminController::class, 'about_me'])->name('dashboard.about_me');
        Route::post('/about_me/store', [AdminController::class, 'store'])->name('dashboard.about_me.store');
        Route::get('/about_view', [AdminController::class, 'about_view'])->name('dashboard.about_view');
        Route::get('/edit_about/{id}', [AdminController::class,'edit'])->name('dashboard.edit_about');
        Route::post('/edit_about/update/{id}', [AdminController::class,'edit_about_update'])->name('dashboard.edit_about.update');
    });
   
 

});
