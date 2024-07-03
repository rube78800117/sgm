<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Queue\ListenerOptions;
use App\Models\Order;
use Livewire\Component;

class IndexOrderSelected extends Component

{ 
    
    protected $listeners = ['refreshChildComponent' => 'reloadData'];
    public $orders, $lineSelect;
 
public function refreshPage(){
  
}
    
    public function render()
    {
        return view('livewire.admin.index-order-selected' );
    }




public function updatedLineSelect(){
    $this->orders = Order::where('origin_line_id', $this->lineSelect)->get();

}
    public function reloadData()
    {
        $this->orders = Order::where('origin_line_id', $this->lineSelect)->get();
    }
}
