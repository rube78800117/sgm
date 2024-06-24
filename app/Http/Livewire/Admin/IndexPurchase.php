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

   


        $purchasesTotal=Purchase::all();
        $purchasesFound = Purchase::where('id', 'LIKE','%'.$this->search.'%');
        $purchases = $purchasesFound
        ->orWhere('description', 'LIKE','%'.$this->search.'%')
        ->orWhere('ndocument', 'LIKE', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(10);
       
       
        return view('livewire.admin.index-purchase', compact('purchases','purchasesTotal', 'purchasesFound'))->layout('layouts.admin');
    }
}
