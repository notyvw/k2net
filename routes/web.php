<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PricingController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/', [HomeController::class, 'guest'])->name('dashboard');

Route::get('/', [HomeController::class, 'guest'])->name('dashboard')->withoutMiddleware(['auth']);

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::resource('/admin/masteruser', MasterUserController::class);
    Route::get('/admin/masteruser', [MasterUserController::class, 'index'])->name('masteruser.index');

    Route::resource('/admin/contact', ContactController::class);
    Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.index');

    Route::resource('/admin/product', ProductController::class);
    Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');

    Route::resource('/admin/message', MessageController::class);
    Route::get('/admin/message', [MessageController::class, 'index'])->name('message.index');

    Route::resource('/admin/pricing', PricingController::class);
    Route::get('/admin/pricing', [PricingController::class, 'index'])->name('pricing.index');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
