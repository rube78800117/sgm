<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
class IndexOrder extends Component
{
    use WithPagination;
    public  $pendiente, $enviado, $revision, $aprobado, $anulado, $rechazado, $items;


    public function mount()
    {
    }


    public function render()

    {
       
        
        $enviados = Order::where('status', 2)->get();
        //  dd($enviados);
        $this->enviados = $enviados;

        $orders = Order::query();
        if (request('status')) {
            $orders->where('status', request('status'));
        }
        $orders = $orders->latest()->get();
        $this->orders = $orders;
        
        //   $items = json_decode($this->order->content);
        //  dd($items)
        
        // $this->orderstotal = Order::all()->latest()->paginate(20);
        // $this->orderstotal = $orderstotal;


        // se envia cantidad de registros por cada estado 

        $pendiente = Order::where('status', 1)->count();
        $this->pendiente = $pendiente;
        $pendientereg = Order::where('status', 1)->latest()->get();
        $this->pendientereg = $pendientereg;

        $enviado = Order::where('status', 2)->count();
        $this->enviado = $enviado;
        $enviadoreg = Order::where('status', 2)->latest()->get();
        
        $this->enviadoreg = $enviadoreg;

        
        $revision = Order::where('status', 3)->count();
        $this->revision = $revision;
        $revisionreg = Order::where('status', 3)->latest()->get();
        // dd($revisionreg);
        $this->revisionreg = $revisionreg;
       



        $aprobado = Order::where('status', 4)->count();
        $this->aprobado = $aprobado;
        $aprobadoreg = Order::where('status', 4)->latest()->get();
        // dd($aprobadoreg);
        $this->aprobadoreg = $aprobadoreg;

        $rechazado = Order::where('status', 5)->count();
        $this->rechazado = $rechazado;
        $rechazadoreg = Order::where('status', 5)->get();
        $this->rechazadoreg = $rechazadoreg;


        $anulado = Order::where('status', 6)->count();
        $this->anulado = $anulado;
        $anuladoreg = Order::where('status', 6)->latest()->get();
        $this->anuladoreg = $anuladoreg;

        return view('livewire.admin.index-order',  compact('orders', 'enviados','pendiente', 'enviado', 'revision', 'aprobado', 'rechazado', 'anulado', 'pendientereg', 'enviadoreg','revisionreg', 'aprobadoreg', 'rechazadoreg', 'anuladoreg'));
    }
}
