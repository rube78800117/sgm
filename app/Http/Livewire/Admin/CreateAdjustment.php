<?php

namespace App\Http\Livewire\Admin;

use App\Models\ArticleWarehouse;
use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;

class CreateAdjustment extends Component
{
public $search;
public $lines;
public $selectedArticles; 
public $confirmingClear;  
public $descriptionCount;
public $lineselect, $stationselect, $warehouseselect;
public $stations, $warehouses, $warehouse_id, $warehouse;
public $result;
public $quantityTotal, $adjust, $lineSelected, $linewarehouse;
public $items = []; // Aquí se supone que tienes una colección de items desde tu consulta
public $adjustments = []; // Esta variable almacenará los ajustes para cada item
public $total = 0;
public $qty; // Variable para almacenar el total ajustado


    public function mount()
    {
        $this->lines = Line::all();
        // $this->selectedArticles = session()->get('selectedArticles', []);
    }

    // para recuperarel el color de la linea para el icono cabina
    public function updatedLineselect($line_id)
    {
        $this->lineSelected = Line::where('id', $line_id)->first();
        $this->updatedLinewarehouse($this->lineSelected->id);
        $this->linewarehouse= $this->lineSelected->id;
    }

    public function updatedLinewarehouse($line_id)
    {
       

        $this->stations = Station::where('line_id', 'LIKE', $line_id)->get();
        $stations = $this->stations;
    }

    public function updatedStationselect($station_id)
    {
        // $this->station_id = $station_id;

        $this->warehouses = Warehouse::where('station_id', 'LIKE', $station_id)->get();
        $warehouses = $this->warehouses;
    }

    public function updatedWarehouseselect($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;

        $this->warehouse = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
        $warehouse = $this->warehouse;
    }
    public function render()
    {
        return view('livewire.admin.create-adjustment');
    }

    // public function stockWarehouse()
    // {
    //     // Validar que $this->warehouseselect tiene un valor antes de realizar la consulta
    //     if (!$this->warehouseselect) {
    //         return; // o manejar el caso donde no hay selección de almacén
    //     }
    
    //     // Realizar la consulta para obtener los artículos del almacén seleccionado
    //     $data = ArticleWarehouse::where('warehouse_id', $this->warehouseselect)->get();
    
    //     // Hidratar los resultados obtenidos para asegurar que sean instancias del modelo ArticleWarehouse
    //     $this->result = ArticleWarehouse::hydrate($data->toArray());
    
    //     // Puedes imprimir para depuración o contar los resultados
    //     // dd($this->result->count());
    //     // dd($this->result);
    // }




    public function updatedSearch()
    {
        $this->stockWarehouse();
    }

    public function stockWarehouse()
    {
        // Validar que $this->warehouseselect tiene un valor antes de realizar la consulta
        if (!$this->warehouseselect) {
            return; // o manejar el caso donde no hay selección de almacén
        }
    
        // Realizar la consulta para obtener los artículos del almacén seleccionado y aplicar el filtro de búsqueda
        $data = ArticleWarehouse::where('warehouse_id', $this->warehouseselect)
            ->whereHas('article', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('id_dopp', 'like', '%' . $this->search . '%');
            })
            ->get();
    
        // Hidratar los resultados obtenidos para asegurar que sean instancias del modelo ArticleWarehouse
        $this->result = ArticleWarehouse::hydrate($data->toArray());
    }





    public function removeIttem($id)
    {
        unset($this->selectedArticles[$id]);
        // session()->put('selectedArticles', $this->selectedArticles);
    }

    // public function updatedQuantityTotal($qty, $adjust){
    //     $this->total = $qty + $adjust;
    //     return $this->total;
    // }
    public function updatedQuantityTotal($qty, $adjust)
    {
        return $qty + $adjust;
    }


    public function increment()
    {
        $this->qty = $this->qty + 1;
    }

    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }


}
