<?php

namespace App\Http\Livewire\Mycomponents;

use App\Models\Location;
use Livewire\Component;

class LocationArticle extends Component
{

    public $locationId;
    public $locationWare;

    public function mount($locationId)
    {
        $this->locationId = $locationId;
        $this->locationWare = Location ::find($locationId);
    }

   
    public function render()
    {
        return view('livewire.mycomponents.location-article');
    }
}
