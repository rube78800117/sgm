<?php

namespace App\Http\Livewire\Admin;

use App\Models\ArticleWarehouse;
use App\Models\CountDetail;
use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class CreateAdjustment extends Component
{
    public $search;
    public $lines;
    public $selectedArticles;

    public $descriptionCount;
    public $lineselect, $stationselect, $warehouseselect, $stationselect2, $warehouseselect2;
    public $stations, $warehouses, $warehouse_id, $warehouse;

    public $quantityTotal, $adjust, $lineSelected, $lineselected2, $linewarehouse, $linewarehouse2;
    public $items = []; // Aquí se supone que tienes una colección de items desde tu consulta
    public $adjustmentArticles = [];
    public $sessionData = [];
    public $data;
    public $confirmingClear = false;

    public $selectedLine;
    public $selectStation;
    public $selectWarehouse;
    public $selectLineColor;
    public $selectLineName;
    public $selectStationName;
    public $selectWarehouseName;
    protected $resultTotal;
  

    // Esta variable almacenará los ajustes para cada item
    public $adjustments = [];

    public $nItems = 7;

    use WithPagination;

    public function mount()
    {
        // Recuperar todas las líneas
        $this->lines = Line::all();

        // Recuperar la colección 'result' de la sesión, si no existe se asigna una colección vacía
        // Recuperar el valor de 'linewarehouse' de la sesión
        $this->linewarehouse2 = session()->get('linewarehouseS');
        $this->stationselect2 = session()->get('stationselectS');
        $this->warehouseselect2 = session()->get('warehouseselectS');
        $this->selectedLine = Line::find($this->linewarehouse2);
        $this->selectStation = Station::find($this->stationselect2);
        if (!is_null($this->warehouseselect2)) {
        $this->selectWarehouse = Warehouse::find($this->warehouseselect2);
         }else{
            $this->selectWarehouse = Warehouse::with(['station.line'])->first();

         }

            $this->selectLineColor = $this->selectWarehouse->station?->line?->color;
            $this->selectLineName = $this->selectWarehouse->station?->line?->name;
            $this->selectStationName = $this->selectWarehouse->station?->name;
            $this->selectWarehouseName = $this->selectWarehouse->name;
       
      
        $this->adjustments = session()->get('adjustments', []);
    }

    // Para recuperar el color de la línea para el icono cabina
    public function updatedLineselect($line_id)
    {
        $this->lineSelected = Line::find($line_id); // Buscar la línea seleccionada por su ID

        if ($this->lineSelected) {
            $this->updatedLinewarehouse($this->lineSelected->id); // Actualizar el almacén según la línea seleccionada
            $this->linewarehouse = $this->lineSelected->id; // Asignar el ID del almacén seleccionado

            session()->put('linewarehouseS', $this->lineSelected->id); // Guardar el ID del almacén en la sesión
        } else {
            // Manejo de errores si no se encuentra la línea seleccionada
            session()->flash('error', 'Selected line not found.');
        }
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
        // session()->put('stationselectS', $station_id); // Guardar el ID del
    }

    public function updatedWarehouseselect($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;
        $this->warehouse = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
        $warehouse = $this->warehouse;
        $this->selectLineColor = $this->warehouse->station->line->color;
        $this->selectLineName = $this->warehouse->station->line->name;
        $this->selectStationName = $this->warehouse->station->name;
        $this->selectWarehouseName = $this->warehouse->name;

        session()->forget('adjustments'); // Limpiar variable de sssion ajusteslos ajustes
        $this->adjustments = [];
        session()->put('warehouseselectS', $warehouse_id); // Guardar el ID del
    }

    public function render()
    {
        $result = $this->stockWarehouse();
        $resultFound = $result->total();
      
        return view('livewire.admin.create-adjustment', compact('result', 'resultFound'));
    }


    public function updatedSearch()
    {
        $this->stockWarehouse();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function stockWarehouse()
    {
        if (!$this->stationselect) {
            // Validar que $this->warehouseselect tiene un valor antes de realizar la consulta
            if (!$this->warehouseselect2) {
                // Retornar una colección paginada vacía si no hay selección de almacén
                return ArticleWarehouse::where('warehouse_id', 0)->paginate(10);
                
            }else{
                $this->resultTotal=ArticleWarehouse::where('warehouse_id', $this->warehouseselect2);
            }


            // Realizar la consulta para obtener los artículos del almacén seleccionado y aplicar el filtro de búsqueda
            return ArticleWarehouse::where('warehouse_id', $this->warehouseselect2)
                ->whereHas('article', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('id_dopp', 'like', '%' . $this->search . '%')
                    ->orWhere('id_zona', 'like', '%' . $this->search . '%')
                    ->orWhere('id_eetc', 'like', '%' . $this->search . '%');
                })
                ->paginate($this->nItems); // Cambia 10 por el número de resultados por página que desees

        } else {
            // Validar que $this->warehouseselect tiene un valor antes de realizar la consulta
            if (!$this->warehouseselect) {
                // Retornar una colección paginada vacía si no hay selección de almacén
                return ArticleWarehouse::where('warehouse_id', 0)->paginate(10);
            }else {
                $this->resultTotal=ArticleWarehouse::where('warehouse_id', $this->warehouseselect);
            }

            // Realizar la consulta para obtener los artículos del almacén seleccionado y aplicar el filtro de búsqueda
            return ArticleWarehouse::where('warehouse_id', $this->warehouseselect)
                ->whereHas('article', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('id_dopp', 'like', '%' . $this->search . '%')
                    ->orWhere('id_zona', 'like', '%' . $this->search . '%')
                    ->orWhere('id_eetc', 'like', '%' . $this->search . '%');
                })
                ->paginate($this->nItems); // Cambia 10 por el número de resultados por página que desees
        }
    }

    public function removeItem($id)
    {
        unset($this->selectedArticles[$id]);
    }

    public function updatedQuantityTotal($quantity, $adjustment)
    {
        // Verificar que el ajuste sea numérico, no sea cero, y tenga hasta dos decimales
        if (is_numeric($adjustment) && $adjustment != 0 && preg_match('/^-?\d+(\.\d{1,2})?$/', $adjustment)) {
            // Actualiza la sesión con los ajustes actuales

            $data = [
                'adjustments' => $adjustment,
                'linewarehouse' => $this->linewarehouse,
                // Puedes añadir más variables aquí si lo necesitas
            ];

            // Guarda el arreglo completo en la sesión
            session()->put('sessionData', $data);

            session()->put('adjustments', $this->adjustments, $this->linewarehouse);

            // Calcular y devolver el total ajustado
            return $quantity + $adjustment;
        }

        // if (is_numeric($adjustment) && is_int($adjustment*100) && ($adjustment <= 0 || $adjustment >= -99.99)) {
        //      session()->put('adjustments', $this->adjustments);
        // // Implementa la lógica para calcular el total ajustado según tus necesidades
        // return $quantity + $adjustment;
        // }
    }

    public function confirmClear()
    {
        $this->confirmingClear = true;
    }

    public function cancelClear()
    {
        $this->confirmingClear = false;
    }

    public function clearAdjustments()
    {
        // Vaciar el array de la sesión
        session()->forget('adjustments');
        session()->forget('selectWarehouse');
        $this->adjustments = [];
        $this->confirmingClear = false;
    }

    public function storeAdjustments()
    {
        // Obtener los ajustes actuales de la sesión
        $adjustments = session()->get('adjustments', []);

        // Aquí puedes implementar la lógica para guardar los ajustes en la base de datos u otro almacenamiento permanente
        // Por ejemplo, si estás utilizando Eloquent y tienes un modelo para los ajustes, podrías hacer algo como:

        // Limpiar los ajustes de la sesión después de guardarlos
        // session()->forget('adjustments');

        // Opcional: Puedes mostrar un mensaje de éxito o realizar otras operaciones aquí
        session()->flash('message', 'Adjustments stored successfully.');
    }

    public function saveAdjustment($itemId, $adjustmentValue, $item)
    {
        // Actualiza o añade el ajuste para el artículo específico

        // $this->adjustments[$itemId] = [
        //     'key' => $itemId,
        //     'article_id'=> $item['article_id'],
        //     'warehouse_id' => $item['warehouse_id' ],
        //     'quantity'=> $item['quantity'],
        //     'adjustment' => floatval($adjustmentValue),

        // ];

        // Opcional: Puedes mostrar un mensaje de éxito o realizar otras operaciones aquí
        // session()->put('adjustments', $this->adjustments);
        // dd($this->adjustments);
    }
}
