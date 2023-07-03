<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\App;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PeopleController;

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

Route::get('/lan/{locale}', function (string $locale)
{

 //  App::setLocale($locale);
    session(['locale' => $locale]);

    return redirect()->back();
})->whereIn('locale', ['en', 'sr'])->name('lang');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //prikaz svih podataka
    Route::get('/genre', [GenreController::class, 'index'])
    ->name('genre.index');
    
    Route::get('/genre/create', [GenreController::class, 'create'])
    ->name('genre.create');

    Route::post('/genre', [GenreController::class, 'store'])
    ->name('genre.store');

    // izmena podataka
    Route::get('/genre/{genre}/edit', [GenreController::class, 'edit'])
    ->name('genre.edit');

});

require __DIR__.'/auth.php';

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

