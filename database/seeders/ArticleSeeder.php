<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        Article::factory(2)->create();
        $articles = Article::all();
        foreach($articles as $article){
            image::factory(1)->create([
              'imageable_id'=>$article->id,
              'imageable_type'=>'App\Models\Article',
            ]); 
        }
    

    }
}
