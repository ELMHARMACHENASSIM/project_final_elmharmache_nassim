<?php

use App\Http\Controllers\BoxofficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashAdminController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ShopController;
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

// frontend
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/loginuser', [LoginController::class, 'index'])->name('loginuser.index');
Route::get('/reguser', [RegController::class, 'index'])->name('reguser.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ! admin
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admindash', [DashAdminController::class, 'index'])->name('admin.index');
    Route::get('/boxoffice', [BoxofficeController::class, 'index'])->name('boxoffice.index');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/edituser', [EditUserController::class, 'index'])->name('edituser.index');

    //? crud
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/products/delete/{product}', [ProductController::class, 'deleteitem'])->name('products.deleteitem');
    Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');


});





require __DIR__.'/auth.php';
