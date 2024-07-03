<?php

namespace App\Http\Livewire\Admin;

use App\Models\Line;
use App\Models\Warehouse;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Station;
use Livewire\Component;
use Livewire\WithPagination;

class IndexOrderMovement extends Component
{
    use WithPagination;
    protected $listeners = ['warehouseOrderSearch' => 'warehouseOrderSearch'];

    // public  $pendiente, $enviado, $revision, $aprobado, $anulado, $rechazado, $items;
    public $orders;
    public $enviados;
    public $pendiente;
    public $enviado;
    public $revision;
    public $aprobado;
    public $rechazado;
    public $anulado;
    public $pendientereg;
    public $enviadoreg;
    public $revisionreg;
    public $aprobadoreg;
    public $rechazadoreg;
    public $anuladoreg;
    public $lineSelectDestiny;
    public $lines;
    public $open;

    public function zone()
    {
        $user = auth()->user();

        if ($user->hasRole('superadmin')) {
            // Obtener todas las zonas
            $this->lines = Line::all();
        } elseif ($user->hasRole('admin')) {
            // Obtener la zona de la línea del usuario autenticado
            $userLineId = $user->line_id;
            $zoneId = Line::where('id', $userLineId)->value('zone_id');

            // Filtrar las líneas según la zona del usuario
            $this->lines = Line::where('zone_id', $zoneId)->get();
        }
        // Agregar más condiciones aquí para otros roles
        else {
            // Definir una lógica por defecto o específica para otros roles
            $this->lines = Line::where('id', $user->line_id)->get();
        }
    }



    public function refreshPage()
    {
        // return redirect()->route('admin.orders.index', ['reload' => $this->lineSelect]);
    }

    public function mount()
    {
        $this->zone();
        $this->lineSelectDestiny = auth()->user()->line_id;
        //  $this->lineSelectDestiny = $this->lines->isNotEmpty() ? $this->lines->first()->id : null;
        // $this->lineSelect = 1;
    }

    public function warehouseOrderSearch($id)
    {
        // $warehouseOrder = Warehouse::find($id);

        // return $warehouseOrder->name;
    }

    // public function render()
    // {
    //     // $orders = collect();

    //     if ($this->lineSelect) {
    //         // Obtener los IDs de las estaciones que pertenecen a la línea seleccionada
    //         $stationIds = Station::where('line_id', $this->lineSelect)->pluck('id');

    //         // Obtener los IDs de los almacenes que pertenecen a las estaciones obtenidas
    //         $warehouseIds = Warehouse::whereIn('station_id', $stationIds)->pluck('id');

    //         // Filtrar las órdenes usando los IDs de los almacenes obtenidos
    //         $orders = Order::whereIn('destiny_mov_warehouse_id', $warehouseIds)->get();
    //     }

    //     $this->orders = $orders->map(function ($order) {
    //         return new \App\Models\Order($order->toArray());
    //     })->all();

    //     // $this->orders= Order::all();

    //     return view('livewire.admin.index-order-movement');
    // }

    public function render()
    {
        //  $this->orders=Order::all();
        $this->orders = Order::whereIn('status', [4, 5])
            ->where('movement_type', '7')
            ->whereHas('warehouseDestiny', function ($query) {
                $query->whereHas('station', function ($query) {
                    $query->where('line_id', $this->lineSelectDestiny);
                });
            })
            ->get();
        return view('livewire.admin.index-order-movement');
    }
}
