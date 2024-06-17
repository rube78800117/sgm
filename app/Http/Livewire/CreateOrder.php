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
// use Illuminate\Support\Facades\Auth 
// use Exception;

class CreateOrder extends Component
{

    public $reason, $ot, $equipment, $date_out , $line_user;
    public $line_id = 1, $station_id, $warehouse_id, $stations, $warehouses, $warehouse, $lines, $linewarehouse, $stationselect,$warehouseselect ;
    public $rules=[
      'reason'=>'required'
    ];

    public function create_order() {
      
      
        $this->validate([

            'reason'=>'required',
            'equipment'=>'required',
            'date_out' => ['required', 'date', 'after_or_equal:' . Carbon::now()->subMonth()->toDateString(), 'before_or_equal:' . Carbon::now()->addMonth()->toDateString()],

        ]);
  
      try {
          DB::transaction(function () {


            $order = new Order(); 
            $order->status = 2; 
            $order->movement_type = '0';
            $order->user_id = auth()->user()->id;
            $order->reason = $this->reason; 
            $order->content = Cart::content(); 
            $order->approved_user_id = auth()->user()->id;
            $order->ot = $this->ot;
            $order->equipment = $this->equipment;
            $order->observation = "No registrado";
          //   se identifica la linea del usuario para el registro ya que esta es la unica al que puede acceder 
            $order->origin_line_id = $this->line_user->id;
            $order->origin_line_name = $this->line_user->name;
            $order->destiny_mov_warehouse_name= " N/A";
            $order->destiny_mov_line_name = "N/A";
// como es el una salida se asiga el mismo almacen para destino en una salida
            $order->destiny_mov_warehouse_id = $this->warehouse_id; 
            $order->items_out_date = $this->date_out;

            //   $order = new Order(); 
            //   $order->status = 2; 
            //   $order->movement_type = '0';
            //   $order->user_id = auth()->user()->id;
            //   $order->reason = $this->reason; 
            //   $order->content = Cart::content(); 
            //   $order->approved_user_id = auth()->user()->id;
            //   $order->ot = $this->ot;
            //   $order->equipment = $this->equipment;
            //   $order->observation = "No se registrado";
            //   $order->origin_line_id = $this->line_user->name;
            //   $order->origin_line_name = $this->line_user->name;
            //   $order->destiny_mov_warehouse_name= " N/A";
            //   $order->destiny_mov_line_name = "N/A";

            //   $order->destiny_mov_warehouse_id = $this->warehouse_id;
            //   $order->items_out_date = $this->date_out;
  
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



  public function mount(){

   
    $warehouse = Warehouse::find($this->warehouse_id);
        
    // $line = Line ::where('id', 'LIKE', auth()->user()->line_id)->first();
    // $this->line_user = $line;

    // $lineId=Line::where('id', 'LIKE' , (auth()->user()->line_id));
    // $lineName=Line::find(auth()->user()->line_id);


}


    public function updatedWarehouseselect($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;

        $this->warehouse = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
        $warehouse = $this->warehouse;
    }





  public function render()
    {
      $user=auth()->user();
 

      $user_line_id=auth()->user()->line->id;
        return view('livewire.create-order', compact('user'));
    }


    


}