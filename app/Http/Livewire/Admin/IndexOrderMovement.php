<?php

namespace App\Http\Livewire\Admin;

use App\Models\Line;
use App\Models\Warehouse;
use App\Models\Order;
use App\Models\OrderDetail;
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
    public $lineSelect;
    public $open;

    public function zone()
    {
        $user = auth()->user();

        if ($user->hasRole('superadmin')) {
            // Obtener la zona de la línea del usuario autenticado
            $userLineId = $user->line_id;
            $zoneId = Line::where('id', $userLineId)->value('zone_id');

            // Filtrar los almacenes del artículo según la zona del usuario
            $lines = Line::where('zone_id', $zoneId)->get();
        } else {
            // Obtener la zona de la línea del usuario autenticado
            $userLineId = $user->line_id;
            $zoneId = Line::where('id', $userLineId)->value('zone_id');

            // Filtrar los almacenes del artículo según la zona del usuario
            $lines = Line::where('zone_id', $zoneId)->get();
        }

        return $lines;
    }

    public function mount()
    {
        $lineSelect = auth()->user()->line_id;
        $this->lineSelect = $lineSelect;
    }

    public function warehouseOrderSearch($id)
    {
        $warehouseOrder = Warehouse::find($id);

        return $warehouseOrder->name;
    }

    public function render()
    {
        //   $this->orders=Order::all();
        $this->orders = Order::whereIn('status', [2,3,4,5])
            ->where('movement_type', '7')
            ->get();
        return view('livewire.admin.index-order-movement');
    }
}
