<?php

namespace App\Http\Livewire;
use App\Models\Article;
use Livewire\WithPagination;
use Livewire\Component;

class Search extends Component
{
    public $search;





    use WithPagination;
    public  $idsearch;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function updatingIdsearch(){
       
        $this->resetPage();
  
    }



    public function render()
    {





        $articles = Article::where('name', 'LIKE','%'.$this->search.'%')
        ->orWhere('id_dopp', 'LIKE','%'.$this->search.'%')
        ->orWhere('id_zona', 'LIKE', '%'.$this->search.'%')
        ->orWhere('id_eetc', 'LIKE', '%'.$this->search.'%')
      
        
 ->paginate(50);
       
       
        return view('livewire.search', compact('articles'));






        // return view('livewire.search');
    }


}
