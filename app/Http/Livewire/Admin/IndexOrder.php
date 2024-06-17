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



    public function zone()
    {
      
        $user = auth()->user();

        if ($user->hasRole('admin')) { 
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
         $this->lineSelect=  $lineSelect;
    }

    public function warehouseOrderSearch($id){
        $warehouseOrder=Warehouse::find($id);
       
        return $warehouseOrder->name;

    }





    public function render()
    {
        
$lineSelect= $this->lineSelect;
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











//     public function render()
// {
//     // Obtiene todas las órdenes enviadas
//     $this->enviados = Order::where('status', 2)->get();

//     // Consulta de órdenes filtradas por estado si se proporciona
//     $ordersQuery = Order::query();
//     if (request('status')) {
//         $ordersQuery->where('status', request('status'));
//     }
//     $this->orders = $ordersQuery->latest()->get();

//     // Cantidad de registros por cada estado y sus registros
//     $statuses = [
//         1 => 'pendiente',
//         2 => 'enviado',
//         3 => 'revision',
//         4 => 'aprobado',
//         5 => 'rechazado',
//         6 => 'anulado',
//     ];

//     foreach ($statuses as $status => $label) {
//         $this->{$label} = Order::where('status', $status)->count();
//         $this->{$label . 'reg'} = Order::where('status', $status)->latest()->get();
//     }

//     return view('livewire.admin.index-order', [
//         'orders' => $this->orders,
//         'enviados' => $this->enviados,
//         'pendiente' => $this->pendiente,
//         'enviado' => $this->enviado,
//         'revision' => $this->revision,
//         'aprobado' => $this->aprobado,
//         'rechazado' => $this->rechazado,
//         'anulado' => $this->anulado,
//         'pendientereg' => $this->pendientereg,
//         'enviadoreg' => $this->enviadoreg,
//         'revisionreg' => $this->revisionreg,
//         'aprobadoreg' => $this->aprobadoreg,
//         'rechazadoreg' => $this->rechazadoreg,
//         'anuladoreg' => $this->anuladoreg,
//     ]);
// }


    // public function render()
    // { 
    //     $user = auth()->user(); // Suponiendo que la zona está definida en el modelo de usuario
    //     $userZone= $user->line->zone->id;
    //     $this->enviados = Order::where('status', 2)->where('zone_id', $userZone)->get();

    //     $orders = Order::query()->where('zone_id', $userZone);
        
    //     if (request('status')) {
    //         $orders->where('status', request('status'));
    //     }

    //     $this->orders = $orders->latest()->get();

    //     $this->pendiente = Order::where('status', 1)->where('zone_id', $userZone)->count();
    //     $this->pendientereg = Order::where('status', 1)->where('zone_id', $userZone)->latest()->get();

    //     $this->enviado = Order::where('status', 2)->where('zone_id', $userZone)->count();
    //     $this->enviadoreg = Order::where('status', 2)->where('zone_id', $userZone)->latest()->get();

    //     $this->revision = Order::where('status', 3)->where('zone_id', $userZone)->count();
    //     $this->revisionreg = Order::where('status', 3)->where('zone_id', $userZone)->latest()->get();

    //     $this->aprobado = Order::where('status', 4)->where('zone_id', $userZone)->count();
    //     $this->aprobadoreg = Order::where('status', 4)->where('zone_id', $userZone)->latest()->get();

    //     $this->rechazado = Order::where('status', 5)->where('zone_id', $userZone)->count();
    //     $this->rechazadoreg = Order::where('status', 5)->where('zone_id', $userZone)->get();

    //     $this->anulado = Order::where('status', 6)->where('zone_id', $userZone)->count();
    //     $this->anuladoreg = Order::where('status', 6)->where('zone_id', $userZone)->latest()->get();

    //     return view('livewire.admin.index-order', compact('orders', 'enviados', 'pendiente', 'enviado', 'revision', 'aprobado', 'rechazado', 'anulado', 'pendientereg', 'enviadoreg', 'revisionreg', 'aprobadoreg', 'rechazadoreg', 'anuladoreg'));
    // }



















    // public function render()

    // {   
       
        
    //     $enviados = Order::where('status', 2)->get();
    //     //  dd($enviados);
    //     $this->enviados = $enviados;

    //     $orders = Order::query();
    //     if (request('status')) {
    //         $orders->where('status', request('status'));
    //     }

    //     $orders = $orders->latest()->get();
    //     $this->orders = $orders;
        
    //     //   $items = json_decode($this->order->content);
    //     //  dd($items)
        
    //     // $this->orderstotal = Order::all()->latest()->paginate(20);
    //     // $this->orderstotal = $orderstotal;


    //     // se envia cantidad de registros por cada estado 

    //     $pendiente = Order::where('status', 1)->count();
    //     $this->pendiente = $pendiente;
    //     $pendientereg = Order::where('status', 1)->latest()->get();
    //     $this->pendientereg = $pendientereg;

    //     $enviado = Order::where('status', 2)->count();
    //     $this->enviado = $enviado;
    //     $enviadoreg = Order::where('status', 2)->latest()->get();
        
    //     $this->enviadoreg = $enviadoreg;

        
    //     $revision = Order::where('status', 3)->count();
    //     $this->revision = $revision;
    //     $revisionreg = Order::where('status', 3)->latest()->get();
    //     // dd($revisionreg);
    //     $this->revisionreg = $revisionreg;
       



    //     $aprobado = Order::where('status', 4)->count();
    //     $this->aprobado = $aprobado;
    //     $aprobadoreg = Order::where('status', 4)->latest()->get();
    //     // dd($aprobadoreg);
    //     $this->aprobadoreg = $aprobadoreg;

    //     $rechazado = Order::where('status', 5)->count();
    //     $this->rechazado = $rechazado;
    //     $rechazadoreg = Order::where('status', 5)->get();
    //     $this->rechazadoreg = $rechazadoreg;


    //     $anulado = Order::where('status', 6)->count();
    //     $this->anulado = $anulado;
    //     $anuladoreg = Order::where('status', 6)->latest()->get();
    //     $this->anuladoreg = $anuladoreg;

    //     return view('livewire.admin.index-order',  compact('orders', 'enviados','pendiente', 'enviado', 'revision', 'aprobado', 'rechazado', 'anulado', 'pendientereg', 'enviadoreg','revisionreg', 'aprobadoreg', 'rechazadoreg', 'anuladoreg'));
    // }
}
