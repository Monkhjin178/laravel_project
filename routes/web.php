<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/product', 'index')->name("index");
    Route::get('/product/create', 'create')->name("create");
    Route::post('/product/create', 'store')->name("store");
    Route ::get ('/product/{id}/edit','edit')->name("edit");
    Route:: put('product/{id}/update','update')->name("update");
});



