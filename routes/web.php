<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::get('ecommerce', function(){
        return view('admin-toolkit.ecommerce');
    })->name('ecommerce');
    Route::get('email', function(){
        return view('admin-toolkit.email');
    })->name('email');
    Route::get('chat', function(){
        return view('admin-toolkit.chat');
    })->name('chat');
    Route::get('calendar', function(){
        return view('admin-toolkit.calendar');
    })->name('calendar');
    Route::get('invoice-create', function(){
        return view('admin-toolkit.invoice.create');
    })->name('invoice-create');
    Route::get('invoice-detail', function(){
        return view('admin-toolkit.invoice.detail');
    })->name('invoice-detail');
    Route::get('e-commerce/product-list', function(){
        return view('admin-toolkit.e-commerce.product-list');
    })->name('e-commerce.product-list');
    Route::get('e-commerce/product-edit', function(){
        return view('admin-toolkit.e-commerce.product-edit');
    })->name('e-commerce.product-edit');
    Route::get('e-commerce/order-list', function(){
        return view('admin-toolkit.e-commerce.order-list');
    })->name('e-commerce.order-list');
    Route::get('e-commerce/order-detail', function(){
        return view('admin-toolkit.e-commerce.order-detail');
    })->name('e-commerce.order-detail');
    Route::get('e-commerce/customer-list', function(){
        return view('admin-toolkit.e-commerce.customer-list');
    })->name('e-commerce.customer-list');
    Route::get('users/user-list', function(){
        return view('admin-toolkit.users.list');
    })->name('users.list');
    Route::get('users/list', function(){
        return view('admin-toolkit.users.list');
    })->name('users.list');
    Route::get('users/profile', function(){
        return view('admin-toolkit.users.profile');
    })->name('users.profile');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
