<?php

use App\Livewire\AddCategoryForm;
use App\Livewire\AddProductForm;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageOrders;
use App\Livewire\ManageCategories;
use App\Livewire\ManageProducts;
use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/product/details', ProductDetail::class);

    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');

    Route::get('/products', ManageProducts::class)->name('products');

    Route::get('/add/product', AddProductForm::class);

    Route::get('/categories', ManageCategories::class);

    Route::get('/add/category', AddCategoryForm::class);

    Route::get('/orders', ManageOrders::class)->name('orders');

});


