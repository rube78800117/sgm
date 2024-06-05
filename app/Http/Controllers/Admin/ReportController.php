<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Warehouse;
use App\Models\Existences;
use App\Models\ArticleWarehouse;
class ReportController extends Controller
{
    //



    public $articles, $color, $warehouses, $articlewarehouses;


    // public function index(Article $article)
    // {
    //     $this->article = $article->id;
    //     //  $volumes=$this->volume($article);
    //     //  return view('article.show', compact("article", "volumes") );
    //     return view('admin.reports.index', compact("article"));
    // }










    public function index()
{
    $warehouses = Warehouse::orderBy('id')->take(1)->get();
    $articles = Article::orderBy('id')->take(10)->get();
    $articlewarehouses = ArticleWarehouse::orderBy('article_id')->take(10)->get();

    return view('admin.reports.index', compact('articlewarehouses', 'warehouses', 'articles'));
}


    // public function index(){
   
    //     // $articles = Article::all()
   
    //     // $articles = Article::join("articlewarehouse", "articlewarehouse.article_id", "=", "article.id");
    //     $warehouses = Warehouse::orderBy('id','ASC')->get();
    //  $articlewarehouses = ArticleWarehouse::orderBy('article_id','ASC')->get();

    //  $articles = Article::orderBy('id','ASC')->get();



      
    //     return view('admin.reports.index', compact("articlewarehouses", "warehouses", "articles"));
    // }



    public function consulta(){
        // $warehouse = $this->article->warehouses->find($value);
        //  $this->quantity = qty_available($this->value, 1);
        // $this->options['warehouse'] = $warehouse->name;
     return 10;
    }
}
