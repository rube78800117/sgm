<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Monolog\Handler\IFTTTHandler;

class UpdateCartItem extends Component
{
    public $rowId, $quantity, $qty, $limit, $qtyDecimal, $id_art;

    public function mount()
    {
        $item = Cart::get($this->rowId);
        $this->quantity = quantity($item->options->id_art, $item->id);
        $this->qty = $item->qty;
        $this->id_art = $item->options->id_art;
    }

    public function increment()
    {

        $this->qty = $this->qty + 1;
        Cart::update($this->rowId, $this->qty);

        //    $this->emit('render');
        //   $this->emitTo('dropdown-cart', 'render');
    }

    public function decrement()
    {
        
        $this->qty = $this->qty - 1;
        Cart::update($this->rowId, $this->qty);

        // $this->emit('render');
        //  $this->emitTo('dropdown-cart', 'render');
    }

   

    public function render()
    {
        return view('livewire.update-cart-item');
    }
}
