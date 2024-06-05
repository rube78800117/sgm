<?php

namespace App\Http\Livewire\Mycomponents;
use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public $enviado, $color, $status, $count, $icon;


    public function render()
    {


        return view('livewire.mycomponents.card');
    }
}
