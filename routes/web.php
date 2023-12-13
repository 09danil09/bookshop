<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index'])->name('books.index');
Route::get('/book/{book}', [BookController::class, 'show'])->name('books.show');


// Маршрут для фільтрації книг за жанрів
Route::get('/books/genre/{genre}', [BookController::class, 'getBooksByGenre'])->name('books.by_genre');

