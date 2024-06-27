<?php

namespace App\Http\Livewire\Mycomponents;

use App\Models\Location;
use Livewire\Component;

class LocationArticle extends Component
{
    protected $listeners = ['prueba' => 'prueba'];
    public $locationId, $open;
    public $locationWare;

    public function mount($locationId)
    {
        $this->locationId = $locationId;
        $this->locationWare = Location ::find($locationId);
    }

   
    public function prueba($value){
        $this->locationId = $value;
      
    }

    public function render()
    { 

        return view('livewire.mycomponents.location-article');

    }
}
