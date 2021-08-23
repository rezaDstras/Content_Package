<?php

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Ehcoder\Contact\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact/store',[ContactController::class,'store'] )->name('store.contact');
