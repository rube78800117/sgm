<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;
use App\Models\Station;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AddCartItem extends Component
{
    protected $listeners = ['render'];
    
    public $quantity;
    public $warehouse;

    public $warehouses_name;
    public $article, $existence;
    public $WarehouseId;
    public $line_color;
    public $warehouse_line_id;

    public $qty = 1;
    public $options = [];
    public $factor = 1;
    // protected $listeners=['render'];
    public function mount()
    {
        $this->quantity = qty_available($this->article->id, $this->WarehouseId);

        if ($this->article->image != null) {
            // $this->options['image'] = Storage::url($this->article->image->url); # code...
            //  $this->options['image'] = asset('public_html/public/storage/'.$this->article->image->url); # code...
            // Si se utilizando Laravel, y la imagen está almacenada en el directorio storage/app/public, por tanto se accede a las imagenes de la siguiente forma asset('storage/'.$this->article->image->url)
            $this->options['image'] = asset('storage/' . $this->article->image->url); # code...
        } else {
            $this->options['image'] = asset('public_html/public/storage/articles/def.jpg');
        }

        $this->options['warehouse'] = $this->warehouses_name;
        $this->options['id_dopp'] = $this->article->id_dopp;
        $this->options['id_eetc'] = $this->article->id_eetc;
        $this->options['id_art'] = $this->article->id;
        $this->options['line_color'] = $this->line_color;
        $this->options['unit'] = $this->article->unit->name;

        return $this->quantity;
    }

    public function updateqtyId($value)
    {
        $warehouse = $this->article->warehouses->find($value);
        $this->quantity = qty_available($this->article->id, $this->WarehouseId);
        $this->options['warehouse'] = $warehouse->name;
    }


    
    
   

    public function addItem()
    {

        if (Cart::count()==0) {
        
            Cart::add([
                'id' => $this->WarehouseId,
                'name' => $this->article->name,
                'qty' => $this->qty,
                'price' => 0,
                'weight' => 550,
                'options' => $this->options,
                // 'warehouse' => $this->existence->warehouse->name,
            ]);

            $this->quantity = qty_available($this->article->id, $this->WarehouseId);
            $this->reset('qty');
            $this->emitTo('dropdown-cart', 'render');
            // $this->emitTo('add-cart-item','render');


        } else {
          
       
        $warehouseOrderFirst=Warehouse::find(Cart::content()->first()->id);
        $line_id_first_item = $warehouseOrderFirst->station->line->id;
        $warehouseOrder=Warehouse::find($this->WarehouseId);
        $line_id_item = $warehouseOrder->station->line->id;


        if ($line_id_first_item!=$line_id_item ) {
           
            // $this->alertInfo();
                // dd("no esta permitido otro almacen que sea diferente al atual");
       
            $this->alertError($warehouseOrderFirst->station->line->name);
        
        
        } else {
            Cart::add([
                'id' => $this->WarehouseId,
                'name' => $this->article->name,
                'qty' => $this->qty,
                'price' => 0,
                'weight' => 550,
                'options' => $this->options,
                // 'warehouse' => $this->existence->warehouse->name,
            ]);
            $this->quantity = qty_available($this->article->id, $this->WarehouseId);
            $this->reset('qty');
            $this->emitTo('dropdown-cart', 'render');
            // $this->emitTo('add-cart-item','render');
        }
    }
    }




    public function increment()
    {
        $this->qty = $this->qty + 1;
    }

    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }

    public function render()
    {
        $user = auth()->user();
        //  dd($user);

        $user_line_id = auth()->user()->line->id;
        //    dd( $user_line_id);

        return view('livewire.add-cart-item', compact('user', 'user_line_id'));
    }




    // mensages de alerta
   
    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('alerttoastr', 
                ['type' => 'success',  'message' => 'Se guardo y se actualizó correctamente']);
              
    }
   
   
    public function alertError($key)
    {
        $this->dispatchBrowserEvent('alerttoastr', 
                ['type' => 'error',  'message' => 'Debe seleccionar articulos de almacenes de la '.$key.', las solicitudes se realizan uno por linea, si es necesario vacie su caja y vuelva a empesar']);
             
    }
   
   
    public function alertInfo()
    {
        $this->dispatchBrowserEvent('alerttoastr', 
                ['type' => 'info',  'message' => 'Se agrego correctamente!']);
            
    }
   
      
}
