<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Laravel\Socialite\Facades\Socialite;

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


Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/online-user', [AdminController::class, 'index']);
    Route::prefix('dashboard')->group( function(){
        /////about section
        Route::get('/about_me', [AdminController::class, 'about_me'])->name('dashboard.about_me');
        Route::post('/about_me/store', [AdminController::class, 'store'])->name('dashboard.about_me.store');
        Route::get('/about_view', [AdminController::class, 'about_view'])->name('dashboard.about_view');
        Route::get('/edit_about/{id}', [AdminController::class,'edit'])->name('dashboard.edit_about');
        Route::post('/edit_about/update/{id}', [AdminController::class,'edit_about_update'])->name('dashboard.edit_about.update');
        ///skill section
        Route::get('/add_skill', [AdminController::class, 'add_skill'])->name('dashboard.add_skill');
        Route::post('/add_skill/skill_data_store', [AdminController::class, 'skill_data_store'])->name('dashboard.add_skill.skill_data_store');
        Route::get('/skill_data_view', [AdminController::class, 'skill_data_view'])->name('dashboard.skill_data_view');
        Route::get('/edit_skill/{skill_id}', [AdminController::class,'edit_skill'])->name('dashboard.edit_skill');
        Route::post('/edit_skill/skill_update/{skill_id}', [AdminController::class,'skill_update'])->name('dashboard.edit_skill.skill_update');
    });
   
 

});
