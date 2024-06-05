<?php

namespace App\Http\Livewire\Mycomponents;
use App\Models\User;
use App\Models\OrderDetail;

use Livewire\Component;

class CardItem extends Component
{   public $order;

public function mount(){
    $items = json_decode($this->order->content);
    
        // dd($items);
}
    
    public function render()
    {
     
      $items = json_decode($this->order->content);
    //   dd($items);
        return view('livewire.mycomponents.card-item', compact("items"));
    }
}
