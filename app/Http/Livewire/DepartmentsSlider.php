<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DepartmentsSlider extends Component
{
    public $alldepartments; 
    public $departments = [];
    
    public function loadPosts(){
       $this->departments=$this->alldepartments;
        $this->emit('glider');
   }
    public function render()
    {
        return view('livewire.departments-slider');
    }

}