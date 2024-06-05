<?php

namespace App\Http\Livewire;
use App\Models\Article;
use Livewire\Component;

class Idsearch extends Component
{
    public $idsearch;
    public function render()
    {
        return view('livewire.idsearch');
    }




    public function getIdresultsProperty()
{
    return Article::where(function ($query) {
        $query->where('id_dopp', 'LIKE', '%' . $this->idsearch . '%')
              ->orWhere('id_zona', 'LIKE', '%' . $this->idsearch . '%')
              ->orWhere('id_eetc', 'LIKE', '%' . $this->idsearch . '%')
              ->orWhere('name', 'LIKE', '%' . $this->idsearch . '%');
    })
    ->take(15)
    ->get();
}
    // public function getIdresultsProperty(){
    //     return Article::where('id_dopp', 'LIKE','%'.$this->idsearch.'%')
    //     ->orWhere('id_zona', 'like', '%'.$this->idsearch.'%')
    //     ->orWhere('id_eetc', 'like', '%'.$this->idsearch.'%')
    //     ->orWhere('name', 'LIKE', '%'.$this->idsearch.'%')
    //     ->take(15)->get();
    // }
}
