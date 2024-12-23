<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*Route::get('/', function () {
    return view('welcome');
});
*/

route::get('/', [HomeController::class, 'index']);

//Route::get('/checkout', function () {
 //   return view('checkout');
//});

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::middleware(['auth:sanctum' , 'verified'])->get('/dashboard' , function () {
    return view ('dashboard');
})->name('dashboard');
 
route::get('/redirect', [HomeController::class, 'redirect']);


//require __DIR__.'/auth.php';

