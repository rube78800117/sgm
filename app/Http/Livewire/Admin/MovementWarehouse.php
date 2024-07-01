<?php

namespace App\Http\Livewire\Admin;

use App\Models\ArticleWarehouse;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class MovementWarehouse extends Component
{

    
    public $reasonMove, $date_out_move, $observation, $line_user;
    public $line_id = 1, $station_id, $warehouse_id, $stations, $warehouses, $warehouse, $lines, $linewarehouse, $stationselect,$warehouseselect ;
    public $result, $stationsDest, $warehousesDest, $linewarehouseDest, $warehouseDest, $stationselectDest,$warehouseselectDest, $dataArray, $line_first_item ;
  
    public $rules=[

    //     'reasonMove'=>'required',
    //     'date_out' => ['required', 'date', 'after_or_equal:' . Carbon::now()->subMonth()->toDateString(), 'before_or_equal:' . Carbon::now()->addMonth()->toDateString()],
    ];
  
    public function render()
    {




        return view('livewire.admin.movement-warehouse');
    }




  public function mount()
    {
        $this->date_out_move = Carbon::now()->toDateString(); // Inicializa con la fecha actual en formato 'YYYY-MM-DD'

        $this->lines = Line::all();
    
        $line = Line ::where('id', 'LIKE', auth()->user()->line_id)->first();
        $this->line_user = $line;

        $warehouseOrder=Warehouse::find(Cart::content()->first()->id);
        $this->line_first_item = $warehouseOrder->station->line;
       

        
       
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



    
    public function create_mov()
    {
        $rules = $this->rules;
        $this->validate([
            'reasonMove'=>'required',
            'linewarehouse'=>'required',
            'stationselect'=>'required',
            'warehouseselect'=>'required',
            'date_out_move' => ['required', 'date', 'after_or_equal:' . Carbon::now()->subMonth()->toDateString(), 'before_or_equal:' . Carbon::now()->addMonth()->toDateString()],
        ]);
    
        try {
            DB::transaction(function () {
                $order = new Order(); 
                $order->status = 2;
                $order->user_id = auth()->user()->id; 
                $order->movement_type = '7';
                $order->reason = $this->reasonMove; 
                $order->content = Cart::content(); 
                $order->ot = 0;
                $order->equipment = "N/E";
                $order->observation = "S/N";
                $order->origin_line_id = $this->line_first_item->id;
                $order->origin_line_name = $this->line_first_item->name;
                $order->destiny_mov_warehouse_name= $this->warehouse->name;
                $order->destiny_mov_line_name = $this->warehouse->station->line->name;
                $order->destiny_mov_warehouse_id = $this->warehouse_id;

                $order->items_out_date = $this->date_out_move;
    
                $order->approved_user_id = auth()->user()->id; 
    
                // Guardar la orden dentro de la transacción
                $order->save();
                
                // Realizar las operaciones para cada artículo en el carrito
                foreach (Cart::content() as $item) {

                    
                    move($item, $this->warehouse_id);
                    discount($item);
                }
    
                // Destruir el contenido del carrito dentro de la transacción
                Cart::destroy();
                 // Redirigir después de que todas las operaciones se hayan completado
            return redirect()->route('orders.show', $order);
            });
    
  
        } catch (Exception $e) {
            // Manejo del error
            report($e);
            return redirect()->route('orders.index')->with('error', 'Algo salió mal, la transacción fue revertida.');
        }
    }

   




}
