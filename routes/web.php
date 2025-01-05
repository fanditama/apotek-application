<?php

use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details', ProductDetail::class);
