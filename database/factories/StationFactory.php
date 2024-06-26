<?php

namespace Database\Factories;

use App\Models\Station;
use App\Models\Line;
use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Station::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->streetName,
            'Line_id' => Line::all()->random()->id,
        ];
    }
}
