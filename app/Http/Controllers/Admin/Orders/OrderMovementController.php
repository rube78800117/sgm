<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderMovementController extends Controller
{
    public function index()
    {



    

        return view('admin.orders.index-movement');
    }

}
