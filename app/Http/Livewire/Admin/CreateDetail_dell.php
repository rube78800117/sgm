<?php

namespace App\Http\Livewire\Admin;
use App\Models\Article;
use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithPagination;

class CreateDetail extends Component
{use WithPagination;
        public $search, $idsearch;
    public function render()
    {
        

      
       
        return view('livewire.admin.create-detail', compact('purchases'))->layout('layouts.admin');
        
    }
}
