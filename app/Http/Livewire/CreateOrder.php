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

class CreateOrder extends Component
{

    public $reason;
    public $line_id = 1, $station_id, $warehouse_id, $stations, $warehouses, $warehouse, $lines, $linewarehouse, $stationselect,$warehouseselect ;
    public $rules=[
      'reason'=>'required'
    ];

    public function mount()
    {
        $this->lines = Line::all();
        
    }



    public function updatedLinewarehouse($line_id)
    {
        $this->line_id = $line_id;

        $this->stations = Station::where('line_id', 'LIKE', $this->line_id)->get();
        $stations = $this->stations;
    }


    public function updatedStationselect($station_id)
    {
        $this->station_id = $station_id;

        $this->warehouses = Warehouse::where('station_id', 'LIKE', $this->station_id)->get();
        $warehouses = $this->warehouses;
    }


    public function updatedWarehouseselect($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;

        $this->warehouse = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
        $warehouse = $this->warehouse;
    }









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

















    // public function create_order(){
      
    //     $rules=$this->rules;
    //     $this->validate($rules);
    //     $order = new Order(); 
    //     $order->status = 2; 
    //     $order->movement_type = '0';
    //     $order->user_id = auth()->user()->id; 
    //     $order->reason = $this->reason; 
    //     $order->content = Cart::content(); 
    //     $order->approved_user_id = auth()->user()->id; 

    //     $order->ot = 444;
    //     $order->equipment = "equipos Nro 1";
    //     $order->observation = "Observacione 1";
    //     $order->destiny_mov_warehouse_id = $this->warehouse_id;
    //     $order->items_out_date = Carbon::today();


    //     $order->save();
        
    //     foreach (Cart::content() as $item) {
          
    //       discount($item);
    //     }




    //     Cart::destroy();
    //     return redirect()->route('orders.show', $order);
        
    // }














    // public function save(Request $request)
    // {   $CreateOrder = new Order;   
    //     $CreateOrder->user_id = 5; 
    //     $CreateOrder->reason = $request->input('reason');      
    //     return Order::create($CreateOrder->toArray());
    // }
  public function render()
    {
        return view('livewire.create-order');
    }



    public function create_mov(){
      $rules=$this->rules;
      $this->validate($rules);
      $order = new Order(); 
      $order->status = 2;
      $order->user_id = auth()->user()->id; 
      $order->movement_type = '7';
      $order->reason = $this->reason; 
      $order->content = Cart::content(); 

      $order->ot=0;
      $order->equipment= "mov";
      $order->observation= "Obs movimiento";
      $order->destiny_mov_warehouse_id = $this->warehouse_id;
      $order->items_out_date= Carbon::today();

      $order->approved_user_id = auth()->user()->id; 




// agreagar AQUI






      $order->save();
      
      foreach (Cart::content() as $item) {
         move($item, $this->warehouse_id);
         discount($item);
      }
      Cart::destroy();
      return redirect()->route('orders.show', $order);
    }




}