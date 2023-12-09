<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\Webcontroller;
use App\http\Controllers\Admin\DashboardController;
use App\http\Controllers\Admin\ProductController;
use App\http\Controllers\Admin\ProductaddController;
use App\http\Controllers\Admin\CategoriesController;
use App\http\Controllers\Admin\OrdersController;
use App\http\Controllers\Admin\AdminController;


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

Route::get('/', function () {
    return view('home');
});


Route::get('home', [Webcontroller::class, 'home'])->name('home');
Route::get('contact', [Webcontroller::class, 'contact'])->name('contact');
Route::get('about', [Webcontroller::class, 'about'])->name('about');
Route::get('rings', [Webcontroller::class, 'rings'])->name('rings');
Route::get('cart', [Webcontroller::class, 'cart'])->name('cart');
Route::get('pendants', [Webcontroller::class, 'pendants'])->name('pendants');
Route::get('bracelets', [Webcontroller::class, 'bracelets'])->name('bracelets');
Route::get('necklace', [Webcontroller::class, 'necklace'])->name('necklace');
Route::get('earring', [Webcontroller::class, 'earring'])->name('earring');
Route::get('login', [Webcontroller::class, 'login'])->name('login');
Route::get('register', [HomeController::class, 'register'])->name('register');
Route::get('details/{id}', [Webcontroller::class, 'details'])->name('details');
Route::get('cart', [Webcontroller::class, 'cart'])->name('cart');
Route::get('addtocart/{id}', [Webcontroller::class, 'addtocart'])->name('addtocart');



// admin works
Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('admin_login',[AdminController::class, 'admin_login'])->name('admin_login');
   Route::post('check_user', [AdminController::class, 'login'])->name('check_user');

   
Route::middleware(['Admin'])->group(function (){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('products_list',[ProductController::class,'products_list'])->name('products_list');
    Route::get('product_add',[ProductaddController::class,'product_add'])->name('product_add');
    Route::get('categories',[CategoriesController::class,'categories'])->name('categories');
    Route::get('orders_list',[OrdersController::class,'orders_list'])->name('orders_list');
    Route::post('store',[ProductaddController::class,'store'])->name('store');

});


});
    
    
   
        

       
       

