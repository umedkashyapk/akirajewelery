<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\DashboardController;


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
Route::get('bracelets', [Webcontroller::class, 'bracelets'])->name('bracelets');
Route::get('necklace', [Webcontroller::class, 'necklace'])->name('necklace');
Route::get('earring', [Webcontroller::class, 'earring'])->name('earring');
Route::get('login', [Webcontroller::class, 'login'])->name('login');


// admin works
Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('admin_login',[AdminController::class, 'admin_login'])->name('admin_login');
   Route::post('check_user', [AdminController::class, 'login'])->name('check_user');
//    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
   
Route::middleware(['admin'])->group(function (){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('categories',[CategoriesController::class,'categories'])->name('categories');

});



});
    
    
   
        

       
       

