<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryConroller;

Route::get('/contact',[App\Http\Controllers\LibraryConroller::class, 'index'])

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
