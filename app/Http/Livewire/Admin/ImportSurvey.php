<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use Livewire\Component;
use Livewire\WithPagination;
class ImportSurvey extends Component
{    
   use WithPagination;
   public $selectedSurveys = [];
    public $open = false;
    
    public function clearArray(){
        $this->selectedSurveys= [];
    }

    public function render()
    {
        $surveys=Count::latest()->paginate(20);
        return view('livewire.admin.import-survey', compact('surveys') );
    }
    public function emiit(){
        // dd($this->selectedSurveys);
        $this->emit('variableEnviada', $this->selectedSurveys);
        $this->clearArray();
        $this->open=false;
      
    }
}
