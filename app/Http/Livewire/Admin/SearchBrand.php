<?php

namespace App\Http\Livewire\Admin;
use App\Models\Trademark;
use Livewire\Component;

class SearchBrand extends Component
{
    public $searchbrand;
    public $result;

    
    

        public function render()
        {
            return view('livewire.admin.search-brand');
        }
    
        public function getResultsProperty() 
        {
            return Trademark::where('name', 'LIKE', '%' .$this->searchbrand .'%')->take(8)->get();
        }






    
}
