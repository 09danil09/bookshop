<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequests;
use App\Http\Requests\UpdateGenreRequests;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
    // Виведення списку жанрів
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {

    }

    /**
    * Store a newly created resource in storage.
    */
    public function store(StoreGenreRequests $request)
    {

    }

    /**
    * Display the specified resource.
    */
    public function show(Genre $genre)
    {

    }

    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Genre $genre)
    {

    }

    /**
    * Update the specified resource in storage.
    */
    public function update(UpdateGenreRequests $request, Genre $genre)
    {

    }

    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Genre $genre)
    {

    }
}
