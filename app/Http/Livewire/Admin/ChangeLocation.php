<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ChangeLocation extends Component
{   public $open, $item;
    public function render()
    {
        return view('livewire.admin.change-location');
    }
}
