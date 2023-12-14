@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/StylesShowBlade.css') }}">
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="book-info">
                    <div class="book-details">
                        <h1 class="book-title">{{ $book->title }}</h1>
                        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
                        <p><strong>Published:</strong> {{ $book->published_at }}</p>
                        <p><strong>Author:</strong> {{ $book->author->first_name }} {{ $book->author->last_name }}</p>


                        <p><strong>Genre:</strong>
                            @if ($book->genre)
                                {{ $book->genre->name }}
                            @else
                                None
                            @endif
                        </p>

                        <p><strong>Publisher:</strong>
                            @if ($book->publisher)
                                {{ $book->publisher->name }}
                            @else
                                None
                            @endif
                        </p>

                    </div>
                </div>
            </div>
            <div class="back-to-books">
                <a href="{{ route('books.index') }}" class="btn btn-primary">Повернутися до списку книг</a>
            </div>
        </div>
    </div>
@endsection
