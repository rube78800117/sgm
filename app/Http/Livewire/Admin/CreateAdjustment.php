<?php

namespace App\Http\Livewire\Admin;

use App\Models\ArticleWarehouse;
use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Session;

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
    public $adjustmentArticles = [];
  
    // Esta variable almacenará los ajustes para cada item
    public $adjustments = [];

    public $total = 0;
    public $qty; // Variable para almacenar el total ajustado

    public function mount()
    {
        // Recuperar todas las líneas
        $this->lines = Line::all();

        // Recuperar la colección 'result' de la sesión, si no existe se asigna una colección vacía

        $this->adjustmentArticles = session()->get('adjustmentArticles', []);
    }

    // Para recuperar el color de la línea para el icono cabina
    public function updatedLineselect($line_id)
    {
        $this->lineSelected = Line::where('id', $line_id)->first();
        $this->updatedLinewarehouse($this->lineSelected->id);
        $this->linewarehouse = $this->lineSelected->id;
    }

    public function updatedLinewarehouse($line_id)
    {
        $this->stations = Station::where('line_id', 'LIKE', $line_id)->get();
        $stations = $this->stations;
    }

    public function updatedStationselect($station_id)
    {
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

    public function updatedSearch()
    {
        $this->stockWarehouse();
    }

    public function stockWarehouse()
    {
        // Validar que $this->warehouseselect tiene un valor antes de realizar la consulta
        if (!$this->warehouseselect) {
            return; // O manejar el caso donde no hay selección de almacén
        }

        // Realizar la consulta para obtener los artículos del almacén seleccionado y aplicar el filtro de búsqueda
        $data = ArticleWarehouse::where('warehouse_id', $this->warehouseselect)
            ->whereHas('article', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')->orWhere('id_dopp', 'like', '%' . $this->search . '%');
            })
            ->get();

        // Hidratar los resultados obtenidos para asegurar que sean instancias del modelo ArticleWarehouse
        $this->result = ArticleWarehouse::hydrate($data->toArray());
    }

    public function removeItem($id)
    {
        unset($this->selectedArticles[$id]);
    }

    public function updatedQuantityTotal($quantity, $adjustment)
    {
        // Implementa la lógica para calcular el total ajustado según tus necesidades
        return $quantity + $adjustment;
    }


    public function saveAdjustment($itemId, $adjustmentValue, $item)
    {

        // Actualiza o añade el ajuste para el artículo específico
        $this->adjustments[$itemId] = [
            'key' => $itemId,
            'article_id'=> $item['article_id'],
            'warehouse_id' => $item['warehouse_id' ],
            'quantity'=> $item['quantity'],
            'adjustment' => floatval($adjustmentValue),

        ];

        // Opcional: Puedes mostrar un mensaje de éxito o realizar otras operaciones aquí
        session()->put('>adjustments', $this->adjustments);
        dd($this->adjustments);
    }
}
