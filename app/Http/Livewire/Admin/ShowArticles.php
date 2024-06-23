<?php

namespace App\Http\Livewire\Admin;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
class ShowArticles extends Component
{   
    use WithPagination;
    public $search, $idsearch;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function updatingIdsearch(){
       
        $this->resetPage();
  
    }
    public function render()
    {
        $articlesTotal = Article::all();
        $articlesFound = Article::where('name', 'LIKE','%'.$this->search.'%');
        $articles=$articlesFound
        ->orWhere('id_dopp', 'LIKE','%'.$this->search.'%')
        ->orWhere('id_zona', 'LIKE', '%'.$this->search.'%')
        ->orWhere('id_eetc', 'LIKE', '%'.$this->search.'%')
        ->paginate(10);
        
      
        

  
       
       
        return view('livewire.admin.show-articles', compact('articles', 'articlesTotal','articlesFound'))->layout('layouts.admin');
    }
}
