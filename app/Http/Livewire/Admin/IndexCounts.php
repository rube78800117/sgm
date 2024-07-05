<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use Livewire\Component;
use Livewire\WithPagination;
class IndexCounts extends Component

{ 
//   s 
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
        $countsTotal = Count::all();
        $countsFound = Count::where('id', 'LIKE', '%' . $this->search . '%');
        $mycounts = $countsFound
        // $mycounts = Count::where('id', 'LIKE','%'.$this->search.'%')
        ->orWhereHas('line', function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->orWhereHas('user', function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        
        ->orWhereHas('warehouse', function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
     
        ->orWhere('name', 'LIKE','%'.$this->search.'%')
        ->orWhere('observation', 'LIKE', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')
        ->paginate(10);
       
       
        return view('livewire.admin.index-counts', compact('mycounts', 'countsTotal', 'countsFound'))->layout('layouts.admin');
    }
}







