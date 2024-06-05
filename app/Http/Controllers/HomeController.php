<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleWarehouse;
use App\Models\Department;
use App\Models\Review;

class HomeController extends Controller
{
   public function __invoke(){
       
      
     
      // $articles = Article::latest("reviews_count")->get()->take(15);
     // recupera 18 registros de articulos ordenados 
            $articles = ArticleWarehouse::join('articles','article_warehouse.article_id','=','articles.id')->orderby('updated_at','desc')->get()->take(15);
      // dd($articles);
          
            
 
      // Recupera una variable con todos los departamentos registrados
            $departments = Department::all();
            return view('welcome', compact('departments','articles'));

     //return  $articles;
    }

   

}
