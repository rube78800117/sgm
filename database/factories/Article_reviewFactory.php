<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\Model;
use App\Models\Review;

use Illuminate\Database\Eloquent\Factories\Factory;

class Article_reviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review_id' => Review::all()->random()->id,
            'article_id' => Article::all()->random()->id,
        ];
    }
}
