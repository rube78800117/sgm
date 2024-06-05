<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;
class OrderController extends Controller
{  use WithPagination;
    public $order, $items;
    //
    public function show(Order $order){
        $this->authorize('author', $order);
        $items = json_decode($order->content);
        return view('orders.show', compact("order", "items"));
    }
    
    public function index(){
       

        return view('orders.index');
    }
}