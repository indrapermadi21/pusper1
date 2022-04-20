<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator AS Faker;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Book::class;
    
    public function definition()
    {

        $randomNumber = rand(1,100);
        $cover = "https://picsum.photos/id/{$randomNumber}/200/300";
        return [
            'author_id' => Author::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->sentence(150),
            'cover' => $cover,
            'qty' => rand(10,20),

        ];
    }
}
