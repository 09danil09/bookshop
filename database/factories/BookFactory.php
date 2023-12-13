<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {

        return [
            'author_id' => fake()->randomElement(Author::all())['id'],
            'publisher_id' => fake()->randomElement(Publisher::all())['id'],
            'genre_id' => fake()->randomElement(Genre::all())['id'],
            'title' => fake()->sentence(6),
            'price' => fake()->randomFloat(2, 1, 99999),
            'isbn' => fake()->numberBetween(111111, 999999),
            'published_at' => fake()->date(),
        ];
    }
}
