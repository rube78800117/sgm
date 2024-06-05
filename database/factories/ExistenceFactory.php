<?php

namespace Database\Factories;

use App\Models\Existence;
use App\Models\Article;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExistenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Existence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'quantity' => $this->faker->randomNumber,
            'warehouse_id' => Warehouse::all()->random()->id,
            'article_id' => Article::all()->random()->id,
            'created_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
        ];
    }
}
