<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/add-product',[ProductController::class,'addproduct'])->name('add-product');
Route::post('/save-product',[ProductController::class,'saveproduct'])->name('save-product');
Route::get('/manage-product',[ProductController::class,'manageproduct'])->name('manage-product');
Route::get('/edit-product/{id}',[ProductController::class,'editproduct'])->name('edit-product');
Route::post('/update-product/{id}',[ProductController::class,'updateproduct'])->name('update-product');
Route::get('/delete-product/{id}',[ProductController::class,'deleteproduct'])->name('delete-product');



