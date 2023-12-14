@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/StylesBookList.css') }}">
@section('content')
    <div class="container">
        <h2>Книги</h2>

        {{-- Показати повідомлення про помилку, якщо є --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Вивести вибір жанру та список книг у таблиці --}}
        <table>
            <tr>
                <td style="padding-right: 10px;">
                    <label for="genre_filter">Виберіть жанр:</label>
                </td>
                <td>
                    <select id="genre_filter" onchange="location = this.value;">
                        <option value="{{ route('books.index') }}">Усі жанри</option>
                        @foreach($genres as $genre)
                            <option value="{{ route('books.by_genre', $genre->id) }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 20px;">
                    {{-- Вивести книги --}}
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
                            <p>Немає доступних книг.</p>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection
