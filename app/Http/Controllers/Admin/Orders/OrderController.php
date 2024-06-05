<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Order;


class OrderController extends Controller
{
    public $order, $color, $items;




    public function index()
    {


    
    

        return view('admin.orders.index');
    }



    public function show(Order $order)
    {


        return view('admin.orders.show', compact("order"));
    }
}
