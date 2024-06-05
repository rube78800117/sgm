<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // //
            'rating' => $this->faker->randomDigit,
            'article_id' => Article::all()->random()->id,
            'user_id' => User::all()->random()->id,
           
            
        ];
    }
}
