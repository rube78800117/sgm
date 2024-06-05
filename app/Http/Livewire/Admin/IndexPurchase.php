<?php

namespace App\Http\Livewire\Admin;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\WithPagination;
class IndexPurchase extends Component
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

        $purchases = Purchase::where('id', 'LIKE','%'.$this->search.'%')
        ->orWhere('description', 'LIKE','%'.$this->search.'%')
        ->orWhere('ndocument', 'LIKE', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(12);
       
       
        return view('livewire.admin.index-purchase', compact('purchases'))->layout('layouts.admin');
    }
}
