<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\ArticleWarehouse;
use Livewire\Component;
use App\Models\Line;
use App\Models\Warehouse;
use App\Models\Station;
use Illuminate\Support\Facades\DB;

class Movement extends Component
{
    public $reason;
    public $line_id = 1, $station_id, $warehouse_id, $stations, $warehouses, $warehouse, $lines, $linewarehouse, $stationselect,$warehouseselect ;
    public $result, $stationsDest, $warehousesDest, $linewarehouseDest, $warehouseDest, $stationselectDest,$warehouseselectDest, $dataArray ;
    public function mount()
    {
        $this->lines = Line::all();

        $this->dataArray = ArticleWarehouse::with(['article' => function ($query) {
            $query->with('image');
        }])->where('warehouse_id', $this->warehouseselect)->get()->toArray();
        
        // $this->dataArray = ArticleWarehouse::with(['article' => function ($query) {
        //     $query->with('image');
        // }])->where('warehouse_id', $this->warehouseselect)->get()->toArray();
        
       
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




// destino
public function updatedLinewarehouseDest($line_id)
{
    $this->line_id = $line_id;

    $this->stationsDest = Station::where('line_id', 'LIKE', $this->line_id)->get();
    $stationsDest = $this->stationsDest;
}


public function updatedStationselectDest($station_id)
{
    $this->station_id = $station_id;

    $this->warehousesDest = Warehouse::where('station_id', 'LIKE', $this->station_id)->get();
    $warehousesDest = $this->warehousesDest;
}
public function updatedWarehouseselectDest($warehouse_id)
{
    $this->warehouse_id = $warehouse_id;

    $this->warehouseDest = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
    $warehouseDest = $this->warehouseDest;
}


   




    public function stockWarehouse()
    {
        
        $this->dataArray = ArticleWarehouse::with(['article' => function ($query) {
            $query->with('image');
        }])->where('warehouse_id', $this->warehouseselect)->get()->toArray();
    }

  

    
    public function render()
    {
        $data = ArticleWarehouse ::where('warehouse_id', $this->warehouseselect)->get();
        // $dataArray = ArticleWarehouse::with('article')->where('warehouse_id', $this->warehouseselect)->get()->toArray();
        // $dataArray = ArticleWarehouse::where('warehouse_id', $this->warehouseselect)->get()->toArray();
      
       
     

        return view('livewire.admin.movement', compact('data'));


    }
    
    public function removeIttem($key)
    {


    
        
            unset($this->dataArray[$key]);
            $this->dataArray = array_values($this->dataArray); // Reindexar el array
    

        // unset($this->dataArray[$id]);
    }




        public function create_mov(){
  
      
        foreach ( ArticleWarehouse ::where('warehouse_id', $this->warehouseselect)->get() as $item) {
            // dd($item);
            movementMasive($item, $this->warehouseDest->id);
            discountMasive($item);
        }
     
    
      }


      public function create_mov_parcial(){

        DB::beginTransaction(); // Iniciar la transacción

        try {
            foreach ($this->dataArray as $item) {
                movementMasive($item, $this->warehouseDest->id);
                ArticleWarehouse::where('id', $item['id'])->delete();
            }
    
            DB::commit(); // Confirmar la transacción si todas las operaciones son exitosas
    
            $this->mount(); // Recargar los datos después de la eliminación
    
        } catch (\Exception $e) {
            DB::rollback(); // Revertir la transacción en caso de error
    
            // Manejar el error, registrar mensajes, lanzar excepciones, etc.
        }


        // foreach ($this->dataArray as $item) {

        
        //     // Realiza tus operaciones aquí con cada elemento $item del array
        //     // Por ejemplo, puedes llamar a tus funciones movementMasive() y discountMasive() como lo hacías antes:
        //     movementMasive($item, $this->warehouseDest->id);
        //     ArticleWarehouse::where('id', $item['id'])->delete(); // Suponiendo que 'id' es la clave primaria de tu modelo
        // }

   
      
        // $this->mount();
    }

      
      


    }