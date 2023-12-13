<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()
            ->with(['author', 'genre', 'publisher'])
            ->get();

        $genres = Genre::all();

        return view('book.book-list', ['books' => $books, 'genres' => $genres]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }


 //Для виведення книг за жанром
    public function getBooksByGenre($genreId)
    {

        $genre = Genre::find($genreId);

        if (!$genre) {
            dd("Жанр не знайдений за ідентифікатором: $genreId");
        }

        $books = $genre->books;
        //dd($genre, $books);

        return view('book.by_genre', compact('genre', 'books'));
    }


}
