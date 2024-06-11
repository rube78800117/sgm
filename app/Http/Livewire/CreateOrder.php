<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Line;
use App\Models\Warehouse;
use App\Models\Station;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
// use Exception;

class CreateOrder extends Component
{

    public $reason;
    public $line_id = 1, $station_id, $warehouse_id, $stations, $warehouses, $warehouse, $lines, $linewarehouse, $stationselect,$warehouseselect ;
    public $rules=[
      'reason'=>'required'
    ];








    public function create_order() {
      $rules = $this->rules;
      $this->validate($rules);
  
      try {
          DB::transaction(function () {
              $order = new Order(); 
              $order->status = 2; 
              $order->movement_type = '0';
              $order->user_id = auth()->user()->id;
              $order->reason = $this->reason; 
              $order->content = Cart::content(); 
              $order->approved_user_id = auth()->user()->id;
              $order->ot = 444;
              $order->equipment = "equipos Nro 1";
              $order->observation = "Observacione 1";
              $order->destiny_mov_warehouse_id = $this->warehouse_id;
              $order->items_out_date = Carbon::today();
  
              $order->save();
  
              foreach (Cart::content() as $item) {
                  discount($item);
              }
  
              Cart::destroy();

              return redirect()->route('orders.show', $order);
          });
  
  
      } catch (Exception $e) {
          // Manejo de errores
          return back()->withError('An error occurred while processing the order.');
      }
  }











  public function render()
    {
        return view('livewire.create-order');
    }


    


}