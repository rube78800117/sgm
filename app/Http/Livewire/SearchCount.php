<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;



class SearchCount extends Component
{


    public $search;


    public function getResultsProperty() 
{
    return Article::where(function ($query) {
        $query->where('name', 'LIKE', '%' . $this->search . '%')
              ->orWhere('id_dopp', 'LIKE', '%' . $this->search . '%')
              ->orWhere('id_zona', 'LIKE', '%' . $this->search . '%')
              ->orWhere('id_eetc', 'LIKE', '%' . $this->search . '%');
    })->take(20)->get();
}
  

    // public function getResultsProperty() 
    // {
    //     return Article::where('name', 'LIKE', '%' .$this->search .'%')
    //     ->orWhere('id_dopp', 'LIKE','%'.$this->search.'%')
    //     ->orWhere('id_zona', 'LIKE', '%'.$this->search.'%')
    //     ->orWhere('id_eetc', 'LIKE', '%'.$this->search.'%')
    //     ->take(10)->get();
    // }
    // public function render()
    // {
    //     return view('livewire.search-mix');
    // }




 
}




