<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // crea categorias asociando un departamente 
            'name' => $this->faker->word,
           'department_id' => Department::all()->random()->id,
           'slug' => $this->faker->word,
        ];
    }
}
