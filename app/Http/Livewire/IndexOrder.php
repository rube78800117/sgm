<?php

namespace App\Http\Livewire;



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
       
       
       
   
       
         $orders = Order::query()->where('user_id', auth()->user()->id);
        if (request('status')) {
            $orders->where('status', request('status'));
        }
       
        $orders = $orders->latest()->get();
        $this->orders = $orders;
        
        
        
        
        $enviados = Order::where('status', 2)->where('user_id', auth()->user()->id)->get();
        //  dd($enviados);
        $this->enviados = $enviados;

      
       
        
        //   $items = json_decode($this->order->content);
        //  dd($items)
        
        // $this->orderstotal = Order::all()->latest()->paginate(20);
        // $this->orderstotal = $orderstotal;


        // se envia cantidad de registros por cada estado 

        $pendiente = Order::where('status', 1)->where('user_id', auth()->user()->id)->get()->count();
        $this->pendiente = $pendiente;
        $pendientereg = Order::where('status', 1)->where('user_id', auth()->user()->id)->latest()->get();
        $this->pendientereg = $pendientereg;

        $enviado = Order::where('status', 2)->where('user_id', auth()->user()->id)->get()->count();
        $this->enviado = $enviado;
        $enviadoreg = Order::where('status', 2)->where('user_id', auth()->user()->id)->latest()->get();
        
        $this->enviadoreg = $enviadoreg;

        
        $revision = Order::where('status', 3)->where('user_id', auth()->user()->id)->get()->count();
        $this->revision = $revision;
        $revisionreg = Order::where('status', 3)->where('user_id', auth()->user()->id)->latest()->get();
        // dd($revisionreg);
        $this->revisionreg = $revisionreg;
       



        $aprobado = Order::where('status', 4)->where('user_id', auth()->user()->id)->get()->count();
        $this->aprobado = $aprobado;
        $aprobadoreg = Order::where('status', 4)->where('user_id', auth()->user()->id)->latest()->get();
        // dd($aprobadoreg);
        $this->aprobadoreg = $aprobadoreg;

        $rechazado = Order::where('status', 5)->where('user_id', auth()->user()->id)->get()->count();
        $this->rechazado = $rechazado;
        $rechazadoreg = Order::where('status', 5)->where('user_id', auth()->user()->id)->latest()->get();
        $this->rechazadoreg = $rechazadoreg;


        $anulado = Order::where('status', 6)->where('user_id', auth()->user()->id)->get()->count();
        $this->anulado = $anulado;
        $anuladoreg = Order::where('status', 6)->where('user_id', auth()->user()->id)->latest()->get();
        $this->anuladoreg = $anuladoreg;
        

        return view('livewire.index-order',  compact('orders', 'enviados','pendiente', 'enviado', 'revision', 'aprobado', 'rechazado', 'anulado', 'pendientereg', 'enviadoreg','revisionreg', 'aprobadoreg', 'rechazadoreg', 'anuladoreg'));
    }
}