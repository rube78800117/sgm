<?php

namespace App\Http\Livewire;
use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Article;
use App\Models\Trademark;
class InfoArticle extends Component
{
    public $search, $counter; 
    public  $article, $articlesel_Id;
    

  protected $listeners = ['article_changed'];

  public function article_changed($articlesel_id){
    
    $this->articlesel_id = $articlesel_id;
    $this->article = Article::where('id', 'LIKE',$this->articlesel_id)->first();

  }

     public function mount(){
      $this->counter = Article::count();
      $this->article = Article::where('id', 'LIKE',1)->first(); //se establese como articulo seleccionado el primer producto por defecto para la vista info article
  
    }
 
    public function render(){
  
     return view('livewire.info-article');
   
    }
}
  