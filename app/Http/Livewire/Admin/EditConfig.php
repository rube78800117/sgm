<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Config;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
use App\Models\ArticleWarehouse;
use Illuminate\Support\Facades\DB;
class EditConfig extends Component
{
 public $estado, $lineselect = 1,$linewarehouse, $stationselect, $warehouseselect, $result;
 protected $listeners = ['stockDelete'];


 
    public function stockDelete(){
       DB::transaction(function () {
       ArticleWarehouse::where('warehouse_id', $this->warehouseselect)->delete();   
          
  
        $this->emit('deleted');
        });  
    }


    public function mount()

    {
        $this->lines = Line::all();
       
    }  
   

    public function stockWarehouse(){
    //     dd($this->warehouseselect);
        $data=ArticleWarehouse::where('warehouse_id', $this->warehouseselect)->get();   
          $this->result = ArticleWarehouse::hydrate($data->toArray());     
    //  dd($result->count());
        // return $result;
        // dd($this->result);
    }

    public function assignValue(Config $config, $value)
    {

        $page = Config::find(1);
        if ($page) {
       
            if ($value == '1') {

                $page->activ_register = '1';
                $page->save();
            } else {

                $page->activ_register = '0';
                $page->save();
            }
        }
    }
    public function render()
    {   $this->estado=Config::find(1);
        // dd($this->estado->activ_register);
        // dd($this->estado);
        $estado = $this->estado->activ_register;
        // dd($estado);

        return view('livewire.admin.edit-config', compact('estado'));
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
}
