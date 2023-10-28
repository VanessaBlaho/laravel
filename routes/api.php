<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books/latest', [BookController::class, 'latest'])->name('latest.response');

// Route::get('book/{id}',[BookController::class, 'show'])->name('book.detail');


Route::get('/users',[UserController::class, 'index']);

//search 
Route::get('/books/search/{query}', [BookController::class, 'search'])->name('book.search');