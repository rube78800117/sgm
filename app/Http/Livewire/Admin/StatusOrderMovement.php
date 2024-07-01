<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class StatusOrderMovement extends Component
{
    public function render()
    {


        $orders = Order::all();
    
        
        return view('livewire.admin.status-order-movement', compact('orders'));
    }
}
