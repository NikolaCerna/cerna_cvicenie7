<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\TimeApiController;
use App\Http\Controllers\TimeRpcController;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);

//Route::prefix('rest')->group(function () {
//    Route::resource('books', BookRestController::class);
//});

Route::get('rest/books', [BookRestController::class, 'index']);
Route::get('rest/books/create', [BookRestController::class, 'create']);
Route::get('rest/books/{id}', [BookRestController::class, 'show']);
Route::post('rest/books', [BookRestController::class, 'store']);
Route::put('rest/books/{id}', [BookRestController::class, 'update']);
Route::delete('rest/books/{id}', [BookRestController::class, 'destroy']);
Route::get('rest/books/{id}/edit', [BookRestController::class, 'edit']);

//Route::prefix('restapi')->group(function () {
//    Route::apiresource('books', BookApiController::class);
//});

Route::get('restapi/books', [BookApiController::class, 'index']);
Route::get('restapi/books/{id}', [BookApiController::class, 'show']);
Route::post('restapi/books', [BookApiController::class, 'store']);
Route::put('restapi/books/{id}', [BookApiController::class, 'update']);
Route::delete('restapi/books/{id}', [BookApiController::class, 'destroy']);

Route::get('restapi/time', [TimeApiController::class, 'index']);
Route::get('rpc/time', [TimeRpcController::class, 'getTime']);
