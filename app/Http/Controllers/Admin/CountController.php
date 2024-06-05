<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public $count,  $items;
    public function index()
    {
       
        return view('admin.counts.index');
    }


    public function create()
    {
     
        return view('admin.counts.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Count $count)
    { 
        return view('admin.counts.show', compact("count"));
     
    }


  

 
    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
