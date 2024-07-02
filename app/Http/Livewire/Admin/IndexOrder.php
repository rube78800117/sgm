<?php

namespace App\Http\Livewire\Admin;

use App\Models\Line;
use Livewire\Component;
use App\Models\Order;
use App\Models\Warehouse;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class IndexOrder extends Component
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
    public $lines;
    public $open;

    public function zone()
    {
        $user = auth()->user();

        if ($user->hasRole('superadmin')) {
            // Obtener todas las lineas
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

    public function mount()
    {
        $this->zone();
        // $lines = Line::all();
        // $lineSelect = auth()->user()->line_id;
        $this->lineSelect = $this->lines->isNotEmpty() ? $this->lines->first()->id : null;
    }

    public function warehouseOrderSearch($id)
    {
        $warehouseOrder = Warehouse::find($id);

        return $warehouseOrder->name;
    }

    public function render()
    {
        $lineSelect = $this->lineSelect;
        //  dd($this->lineSelect);
        // Consulta inicial para órdenes enviadas
        $this->enviados = Order::where('status', 2)
            ->when($lineSelect, function ($query) use ($lineSelect) {
                return $query->where('origin_line_id', $lineSelect);
            })
            ->get();

        // Consulta de órdenes filtradas por estado y origin_line_id si se proporciona
        $ordersQuery = Order::query();
        if (request('status')) {
            $ordersQuery->where('status', request('status'));
        }

        if ($lineSelect) {
            $ordersQuery->where('origin_line_id', $lineSelect);
        }

        $this->orders = $ordersQuery->latest()->get();

        // Cantidad de registros por cada estado y sus registros
        $statuses = [
            1 => 'pendiente',
            2 => 'enviado',
            3 => 'revision',
            4 => 'aprobado',
            5 => 'rechazado',
            6 => 'anulado',
        ];

        foreach ($statuses as $status => $label) {
            $this->{$label} = Order::where('status', $status)
                ->when($lineSelect, function ($query) use ($lineSelect) {
                    return $query->where('origin_line_id', $lineSelect);
                })
                ->count();

            $this->{$label . 'reg'} = Order::where('status', $status)
                ->when($lineSelect, function ($query) use ($lineSelect) {
                    return $query->where('origin_line_id', $lineSelect);
                })
                ->latest()
                ->get();
        }

        return view('livewire.admin.index-order', [
            'orders' => $this->orders,
            'enviados' => $this->enviados,
            'pendiente' => $this->pendiente,
            'enviado' => $this->enviado,
            'revision' => $this->revision,
            'aprobado' => $this->aprobado,
            'rechazado' => $this->rechazado,
            'anulado' => $this->anulado,
            'pendientereg' => $this->pendientereg,
            'enviadoreg' => $this->enviadoreg,
            'revisionreg' => $this->revisionreg,
            'aprobadoreg' => $this->aprobadoreg,
            'rechazadoreg' => $this->rechazadoreg,
            'anuladoreg' => $this->anuladoreg,
        ]);
    }
}
