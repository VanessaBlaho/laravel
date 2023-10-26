<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookReviewController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('api/test/array', [TestController::class, 'arrayResponse'])->name('array.response');
Route::get('api/test/model', [TestController::class, 'modelResponse'])->name('model.response');

Route::get('api/test/model', [TestController::class, 'modelResponse'])->name('model.response');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');



//book detail
Route::get('/book/{id}',[BookController::class, 'show'])->name('book.detail');
//review form
// Route::post('/book/{book_id}/review',[BookReviewController::class, 'store'])->name('submitReview');
Route::post('/book/{book_id}/review',[BookReviewController::class, 'store'])->middleware('auth')->name('book.review.store');

//delete book
Route::delete('/book/{book_id}/review',[BookReviewController::class, 'destroy'])->whereNumber('review')->name('review.destroy');


//all admin routes
Route::group([
    'middleware' => 'can::admin' // *settings of the group
], function(){
    //any routes defined here will automatically get the settings (*) from the group

    Route::get('/admin/books', [AdminBookController::class,'index']);
    Route::get('/admin/users', [UserController::class, 'index']);
});

