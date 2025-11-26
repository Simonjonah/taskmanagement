<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('web')->name('web.')->group(function() {

    Route::middleware(['guest:web'])->group(function() {
        Route::post('/check', [UserController::class, 'check'])->name('check');
        Route::get('/register', [UserController::class, 'register'])->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
    });
    
    Route::middleware(['auth:web'])->group(function() {
        Route::get('/home', [UserController::class, 'home'])->name('home');
        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::post('/update/{id}', [TaskController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');
        Route::post('/reorder', [TaskController::class, 'reorder'])->name('reorder');
        Route::get('/viewtask', [TaskController::class, 'viewtask'])->name('viewtask');
        Route::get('/addproject/{id}', [TaskController::class, 'addproject'])->name('addproject');
        Route::post('/createproject/{id}', [TaskController::class, 'createproject'])->name('createproject');
        Route::get('/viewproject', [ProjectController::class, 'viewproject'])->name('viewproject');
        
        Route::get('/logout', [UserController::class, 'logout'])->name('logout'); 
        
       
    });
});


