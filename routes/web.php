<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('account')->group(function () {
    Route::get('user/{id}', [MainController::class, 'userProfile'])->name('user_profile_id');
    Route::get('admin/{number}', [MainController::class, 'userProfile'])->name('admin_profile_number');
});
Route::get('/', [MainController::class,'index'])->middleware('test_id_company:id')->name('index');
Route::post('/search', [MainController::class,'search'])->middleware('test_id_company:id')->name('search');
Route::view('/anotherUri', 'listClients', ['title' => "Welcome to the High School"])->name('anotherUri');
Route::get('/list/{id}', [MainController::class, 'listClients'])->whereNumber('id')->name('clients');
Route::get('/products/{id?}', [MainController::class, 'listProducts'])->name('products');



Route::fallback([MainController::class, 'fallback'])->name('fallback');

