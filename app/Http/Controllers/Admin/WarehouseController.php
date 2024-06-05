<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Line;
use App\Models\Station;
class WarehouseController extends Controller
{
    public $line, $stations, $name, $linecolor;
    public $lineacronym, $lineID;
    public function index(){
       
       
            $lines = Line::all();
            return view('admin.warehouses.index', compact('lines')); 
           }
}
