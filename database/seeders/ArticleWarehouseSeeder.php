<?php

namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleWarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $articles= Article::all();
        foreach ($articles as $article) {
            $article->warehouses()->attach([
                1 => ['quantity'=> 4],
                2 => ['quantity'=> 6],
                3 => ['quantity'=> 10],
                4 => ['quantity'=> 15],
                5 => ['quantity'=> 8]
               

            ]);

        }



    }
}
