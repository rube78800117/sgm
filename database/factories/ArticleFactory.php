<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Department;
use App\Models\User;
use App\Models\Type;
use App\Models\Trademark;
use Illuminate\Support\str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public $category_id;
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_id = Category::all()->random()->id;
       //$title=$this->faker->sentence();
        return [

            'name' => $this->faker->sentence(4),
            'id_zona' => $this->faker->unique()->postcode,
            'id_dopp' => $this->faker->unique()->postcode,
            'id_eetc' => $this->faker->unique()->randomNumber,
            'description' => $this->faker->sentence(),
            'stock_min' => $this->faker->randomDigit,
            'slug' => $this->faker->slug,
            // 'slug' => Str::slug($title),
            'unit_id' => Unit::all()->random()->id,
            'type_id' =>Type::all()->random()->id,
                      
            'category_id' => $category_id ,
          
            'department_id' => Category::find($category_id)->department_id,
            'user_id' => User::all()->random()->id,
            //'image_id' => Image::all()->random()->id,
            'trademark_id' =>Trademark::all()->random()->id,
            //
        ];
    }
}


