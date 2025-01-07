<?php

use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details', ProductDetail::class);

Route::get('/admin/dashboard', AdminDashboard::class)->middleware('admin');
