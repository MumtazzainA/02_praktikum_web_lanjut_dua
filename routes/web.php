<?php

use App\Http\Controllers\HomeCtrl;
use App\Http\Controllers\AboutCtrl;
use App\Http\Controllers\ArticleCtrl;
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

Route::get('/', [HomeCtrl::class, 'idx']);
Route::get('/about', [AboutCtrl::class, 'about']);
Route::get('/articles/{id}', [ArticleCtrl::class, 'article']);