<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/admin_dashboard', function () {
    return view('admin.home');
});

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified');

route::get('/view_catagory', [AdminController::class, 'view_catagory']);

route::post('/add_catagory', [AdminController::class, 'add_catagory']);

route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);

route::get('/view_product', [AdminController::class, 'view_product']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_product', [AdminController::class, 'show_product']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::get('/order', [AdminController::class, 'order']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);

route::get('/print_pdf/{id}', [AdminController::class, 'print_pdf']);

route::get('/send_email/{id}', [AdminController::class, 'send_email']);

route::post('/send_user_email/{id}', [AdminController::class, 'send_user_email']);

route::get('/search', [AdminController::class, 'searchdata']);



route::get('/product_details/{id}', [HomeController::class, 'product_details']);

route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

route::get('/show_cart', [HomeController::class, 'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

route::get('/cash_order', [HomeController::class, 'cash_order']);
//require __DIR__.'/auth.php';
route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');