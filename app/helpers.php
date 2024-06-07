<?php

use App\Models\Article;
use App\Models\Job_title;
use App\Models\Line;
use App\Models\Warehouse;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use App\Models\Config;
use Dotenv\Parser\Lines;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

 function estadosConfig(){
   
    $estadoReg=Config::find(1);
    $estadoReg = $estadoReg->activ_register;

  return $estadoReg;
 }


   
    function approved($approved_id)
    {
        $approved = User::find($approved_id);
        return $approved;
    }


function jobs()
{

    $jobs = Job_title::all();
    return $jobs;
}
function lines()
{

    $lines = Line::all();
    return $lines;
}


function ImageO($id)
{

    $articleReg = Article::find($id)->image;
    return $articleReg;
}

// Recupera el stock  de un articulo cualquiera en un almacen determinado
function quantity($article_id, $warehouse_id)
{




    $article = Article::find($article_id);

    if ($article->warehouses->find($warehouse_id) != null) {
        $quantity = $article->warehouses->find($warehouse_id)->pivot->quantity; 
       
    } else {
        $quantity = 0;
    }

    return $quantity;
}






// Retorna la cantidad que se adiciono

function qty_added($article_id,  $warehouse_id)
{
    $cart = Cart::content();
    $item = $cart->where('id', $warehouse_id)
        ->where('options.id_art', $article_id)->first();
    if ($item) {
        return $item->qty;
    } else {
        return 0;
    }
}



//Retorna la cantidad disponible actual despues de aguregar items de cada determinado almacen 
function qty_available($article_id, $warehouse_id)
{

    return quantity($article_id, $warehouse_id) - qty_added($article_id, $warehouse_id);
}


//Retorna la cantidad disponible actual despues de aguregar items de cada determinado almacen 
function qty_available2($article_id, $warehouse_id, $ware)
{

    return quantity($article_id, $warehouse_id) - qty_added($article_id, $ware);
}



//descuenta despues de inviarse la solicitud de la cajita de pedidos
function discount2($item, $mov)
{

    $article = Article::find($item->options->id_art);
    $qty_available = qty_available2($item->options->id_art, $mov, $item->id);
    $qty_before = $article->warehouses()->find($item->id)->pivot->quantity; //cantidad antes de la salida 
    $accumulated_before = $article->warehouses()->find($item->id)->pivot->accumulated_request; //guarda el valor anterior antes de eliminarlo
    $qty_acumulate = ($qty_before - $qty_available) + $accumulated_before;
    // dd($qty_before);

    $article->warehouses()->detach($item->id);
    $article->warehouses()->attach([$item->id => ['quantity' => $qty_available, 'accumulated_request' =>  $qty_acumulate]]);
}



//descuenta despues de inviarse la solicitud de la cajita de pedidos
function discount($item)
{
    DB::transaction(function () use ($item) {
        $article = Article::find($item->options->id_art);
        $qty_available = qty_available($item->options->id_art, $item->id);
        $qty_before = $article->warehouses()->find($item->id)->pivot->quantity; // cantidad antes de la salida 
        $accumulated_before = $article->warehouses()->find($item->id)->pivot->accumulated_request; // guarda el valor anterior antes de eliminarlo
        $qty_acumulate = ($qty_before - $qty_available) + $accumulated_before;
        // dd($qty_before);
        $location_id = $article->warehouses()->find($item->id)->pivot->location_id; //guarda el valor anterior de localizacion antes de eliminar
        $article->warehouses()->detach($item->id);
        $article->warehouses()->attach([$item->id => ['quantity' => $qty_available, 'accumulated_request' =>  $qty_acumulate, 'location_id' =>  $location_id]]);
    });
 
    // $article = Article::find($item->options->id_art);
    // $qty_available = qty_available($item->options->id_art, $item->id);
    // $qty_before = $article->warehouses()->find($item->id)->pivot->quantity; //cantidad antes de la salida 
    // $accumulated_before = $article->warehouses()->find($item->id)->pivot->accumulated_request; //guarda el valor anterior antes de eliminarlo
    // $qty_acumulate = ($qty_before - $qty_available) + $accumulated_before;
    // // dd($qty_before);



    // $article->warehouses()->detach($item->id);
    // $article->warehouses()->attach([$item->id => ['quantity' => $qty_available, 'accumulated_request' =>  $qty_acumulate]]);
}
function discountMasive($item)
{
    // dd($item);
    $article = Article::find($item->article_id);
    // $qty_available = $item->quantity;
     
    // dd($qty_before);
  
    $article->warehouses()->detach($item->warehouse_id);
  
}



//incrementa o actualiza las cantidades de articulos ingresados a almacen  
function increase($item)
{





    $article = Article::find($item->article_id);
    $quantity = quantity($item->article_id, $item->warehouse_id) + $item->quantity;


    $user_c= 1;
    $c_date= Carbon::today();

    if (is_null($article->warehouses()->find($item->warehouse_id))) {

        $article->warehouses()->attach([$item->warehouse_id => ['quantity' => $quantity, 'accumulated_request' => 0, 'user_control'=>$user_c, 'control_date'=>$c_date, 'location_id'=>$item->location_id]]);
    } else {
        $accumulated_before = $article->warehouses()->find($item->warehouse_id)->pivot->accumulated_request;  //guarda el valor anterior antes de eliminarlo
        $article->warehouses()->detach($item->warehouse_id);
        $article->warehouses()->attach([$item->warehouse_id => ['quantity' => $quantity, 'accumulated_request' => $accumulated_before, 'user_control'=>$user_c, 'control_date'=>$c_date, 'location_id'=>$item->location_id  ]]);
    }




}

// reajusta el stock si es que se cancela la solicitud
function  income_ajust($item)
{  
  
    $itemopt=($item->options);
    $article = Article::find($itemopt->id_art);
    $quantity = quantity($itemopt->id_art, $item->id) + $item->qty;

    if (is_null($article->warehouses()->find($item->id))) {

        $article->warehouses()->attach([$item->id => ['quantity' => $quantity, 'accumulated_request' => 0]]);
    } else {
        $accumulated_before = $article->warehouses()->find($item->id)->pivot->accumulated_request;  //guarda el valor anterior antes de eliminarlo
        $location_id = $article->warehouses()->find($item->id)->pivot->location_id; //guarda el valor anterior de localizacion antes de eliminar
        $article->warehouses()->detach($item->id);

        $article->warehouses()->attach([$item->id => ['quantity' => $quantity, 'accumulated_request' => $accumulated_before, 'location_id' => $location_id ]]);
    }
}


function move($item, $warehouse_sel)
{
//  dd( $warehouse_sel);

    $article = Article::find($item->options->id_art);
    $quantity = quantity($item->options->id_art, $warehouse_sel) + $item->qty;
//    dd($item);
    if (is_null($article->warehouses()->find($warehouse_sel))) {
       
        $article->warehouses()->attach([$warehouse_sel => ['quantity' => $quantity, 'accumulated_request' => 0]]);
    } else {
        $accumulated_before = $article->warehouses()->find($warehouse_sel)->pivot->accumulated_request;  //guarda el valor anterior antes de eliminarlo
        $article->warehouses()->detach($warehouse_sel);
        $article->warehouses()->attach([$warehouse_sel => ['quantity' => $quantity, 'accumulated_request' => $accumulated_before]]);
    }
}

function movementMasive($item, $warehouseDestination)
{
     
    $article = Article::find($item['article_id']);
    $quantity = quantity($item['article_id'], $warehouseDestination) + $item['quantity'];
//  dd($article->id ,$quantity);
   
    if (is_null($article->warehouses()->find($warehouseDestination))) {
    
        $article->warehouses()->attach([$warehouseDestination => ['quantity' => $quantity, 'accumulated_request' => 0]]);
    } else {
       
        $accumulated_before = $article->warehouses()->find($warehouseDestination)->pivot->accumulated_request;  //guarda el valor anterior antes de eliminarlo
   
       $article->warehouses()->detach($warehouseDestination);
       
        $article->warehouses()->attach([$warehouseDestination => ['quantity' => $quantity, 'accumulated_request' => $accumulated_before]]);
    }
}
