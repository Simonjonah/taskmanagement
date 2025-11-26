<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;


use App\Http\Controllers\TransactionController;



use App\Models\Product;
use App\Models\Testimony;
use App\Models\Team;



Route::get('/', function () {
  
    return view('welcome');
});


Route::get('/remove/{id}', [CartController::class, 'remove'])->name('remove');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/createuser', [UserController::class, 'createuser'])->name('createuser');


Route::prefix('web')->name('web.')->group(function() {

    Route::middleware(['guest:web'])->group(function() {
        
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });
    
    Route::middleware(['auth:web'])->group(function() {
        
        // Route::view('/home','dashboard.home')->name('home');
        Route::get('/home', [UserController::class, 'home'])->name('home');
        
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::get('/viewmyproducts/{ref_no}', [TransactionController::class, 'viewmyproducts'])->name('viewmyproducts');
        Route::get('/myorders', [TransactionController::class, 'myorders'])->name('myorders');
        Route::get('/mytransactions', [TransactionController::class, 'mytransactions'])->name('mytransactions');
        
        
        Route::post('/addtofavourite', [FavouriteController::class, 'addtofavourite'])->name('addtofavourite'); 
        Route::get('/favourite', [FavouriteController::class, 'favourite'])->name('favourite'); 
        Route::get('/favouritedetails/{ref_no}', [ProductController::class, 'favouritedetails'])->name('favouritedetails'); 
        Route::get('/myfavourite', [ProductController::class, 'myfavourite'])->name('myfavourite'); 
        Route::get('/settings', [UserController::class, 'settings'])->name('settings'); 
        Route::get('/profile', [UserController::class, 'profile'])->name('profile'); 
        Route::get('/updateprofile', [UserController::class, 'updateprofile'])->name('updateprofile'); 
        Route::put('/updatemyprofile/{ref_no}', [UserController::class, 'updatemyprofile'])->name('updatemyprofile'); 
        Route::put('/passwordprofile/{ref_no}', [UserController::class, 'passwordprofile'])->name('passwordprofile'); 
        
        Route::get('/logout', [UserController::class, 'logout'])->name('logout'); 
        
       
    });
});


