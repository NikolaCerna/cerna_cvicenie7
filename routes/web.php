<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookRpcController;


Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::get('/example/create', [ExampleController::class, 'showForm']);
Route::post('/example/result', [ExampleController::class, 'processForm']);

