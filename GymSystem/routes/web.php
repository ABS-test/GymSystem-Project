<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TagController;

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
    return view('pages/home');
})->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/terms_and_conditions', function () {
    return view('pages/terms_and_conditions');
})->name('terms_and_conditions');

Route::get('/info', [ContactController::class, 'allData'])->name('contact-info');
Route::get('/info/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one-item');
Route::get('/info/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/blog', [ArticleController::class, 'articleData'])->name('blog');
Route::get('/blog/{id}', [ArticleController::class, 'ShowOneArticleData'])->name('blog-articles-details');