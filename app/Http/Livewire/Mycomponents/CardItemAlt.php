<?php

namespace App\Http\Livewire\Mycomponents;
use App\Models\User;
use App\Models\OrderDetail;

use Livewire\Component;

class CardItemAlt extends Component
{
    public $order;

    public function mount()
    {
        $items = json_decode($this->order->content);

    }
    public function render()
    {
        $items = json_decode($this->order->content);
        return view('livewire.mycomponents.card-item-alt', compact('items'));
    }
}
