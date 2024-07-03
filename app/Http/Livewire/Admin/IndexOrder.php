<?php

namespace App\Http\Livewire\Admin;

use App\Models\Line;
use Livewire\Component;
use App\Models\Order;
use App\Models\Warehouse;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class IndexOrder extends Component
{
    use WithPagination;

    protected $listeners = ['warehouseOrderSearch' => 'warehouseOrderSearch'];

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
            $this->lines = Line::all();
        } elseif ($user->hasRole('admin')) {
            $userLineId = $user->line_id;
            $zoneId = Line::where('id', $userLineId)->value('zone_id');
            $this->lines = Line::where('zone_id', $zoneId)->get();
        } else {
            $this->lines = Line::where('id', $user->line_id)->get();
        }
    }
    public function refreshPage()
    {
         return redirect()->route('admin.orders.index', ['reload' => $this->lineSelect]);
        // $this->loadOrders();
    }
    public function showAll()
    {

        $this->orders = Order::all();

    }

    public function mount()
    {


        $this->zone();


        // Obtener el valor del parámetro de la URL
        $reload = Request::query('reload');

        if ($reload) {
            $this->lineSelect = $reload;
            // Realiza alguna acción si la variable 'reload' está presente
            $this->loadOrders();
        } else {
            $this->lineSelect = auth()->user()->line_id;
            $this->loadOrders();
        }
    }

    public function warehouseOrderSearch($id)
    {
        $warehouseOrder = Warehouse::find($id);
        return $warehouseOrder->name;
    }

    public function render()
    {
        return view('livewire.admin.index-order');
    }

    public function loadOrders()
    {
        $this->orders = Order::where('origin_line_id', $this->lineSelect)->get();
    }

    public function updatedLineSelect()
    {
        //   refresca toda la pagina
       

        // refrecas solo los datos
         $this->refreshPage();
        // $this->emit('refreshChildComponent');
     
        $this->loadOrders(); 
  
    }
}
