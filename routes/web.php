<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);
//post - insert data
//delete - delete data
//put - update data 
//get - display or get some data or resources


//resource ---------



Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);



Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index']);


Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/get-articles', [App\Http\Controllers\ArticleController::class, 'getArticles']);
