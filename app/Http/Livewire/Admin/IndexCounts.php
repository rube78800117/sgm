<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use Livewire\Component;
use Livewire\WithPagination;
class IndexCounts extends Component

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
     
        $mycounts = Count::where('id', 'LIKE','%'.$this->search.'%')
        ->orWhere('name', 'LIKE','%'.$this->search.'%')
        ->orWhere('observation', 'LIKE', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(12);
       
       
        return view('livewire.admin.index-counts', compact('mycounts'))->layout('layouts.admin');
    }
}







