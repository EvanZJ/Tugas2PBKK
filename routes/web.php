<?php

use App\Http\Controllers\BiodataFormController;
use App\Http\Controllers\ArticleController;
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

Route::get('/input',[BiodataFormController::class, 'input']);
Route::post('/proceed', [BiodataFormController::class, 'proceed']);

Route::get("/article", [ArticleController::class, 'index']);
Route::get("/article/{article:slug}", [ArticleController::class, 'content']);
Route::get("/categories", [ArticleController::class, 'categories']);
Route::get("/categories/{category:slug}", [ArticleController::class, 'category']);

