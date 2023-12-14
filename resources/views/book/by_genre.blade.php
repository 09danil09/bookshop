@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/StylesGenreBlade.css') }}">
@section('content')
    <div class="container">
        <h2>Жанр: {{ $genre->name }}</h2>
        <div class="book-grid">
            @if ($books && $books->count() > 0)
                @foreach($books as $book)
                    <div class="book">
                        <div class="book-title">
                            <a href="{{ route('books.show', $book) }}">{{ $book->title }}</a>
                        </div>
                        <div class="book-info">
                            <p>ISBN: {{ $book->isbn }}</p>
                            <p>Published: {{ $book->published_at }}</p>
                            <p>Author: {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Немає доступних книг у цьій категорії.</p>
            @endif
        </div>
        <div class="back-to-books">
            <a href="{{ route('books.index') }}" class="btn btn-primary">Повернутися до списку книг</a>
        </div>
    </div>
@endsection
