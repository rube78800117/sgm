<?php

namespace App\Http\Livewire;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Warehouse;

class ShoppingCart extends Component
{   
    
    public function generateOrders(){
       
  
    $warehouseOrder=Warehouse::find(Cart::content()->first()->id);
    $line_id_first_item = $warehouseOrder->station->line->id;
        
    }



    public function destroy(){
    Cart::destroy();
    // $this->emitTo('dropdown-cart', 'render');
    }

    public function delete($rowID){
    Cart::remove($rowID);
    // $this->emitTo('dropdown-cart', 'render');
    }



    public function render()
    {
    
        return view('livewire.shopping-cart');
    }
}
