<?php

namespace App\Http\Livewire;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DropdownCart extends Component
{
    protected $listeners = ['render'];

    public function destroy(){
        Cart::destroy();
        $this->emit('refreshComponent');
    }
    public function render()
    {
        return view('livewire.dropdown-cart');
    }
}
