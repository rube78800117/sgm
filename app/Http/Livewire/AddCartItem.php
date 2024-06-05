<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;
use App\Models\Warehouse;

class AddCartItem extends Component
{ 
  

    public $quantity;
    public $warehouse;

    public $warehouses_name; 
    public $article, $existence; 
    public $WarehouseId;
    public $line_color;

    
    public $qty = 1;
    public $options=[];

    // protected $listeners=['render'];
    public function mount(){
        $this->quantity = qty_available($this->article->id,  $this->WarehouseId);
           

         
            if ($this->article->image != null) {
                // $this->options['image'] = Storage::url($this->article->image->url); # code...
                    //  $this->options['image'] = asset('public_html/public/storage/'.$this->article->image->url); # code...
                // Si se utilizando Laravel, y la imagen está almacenada en el directorio storage/app/public, por tanto se accede a las imagenes de la siguiente forma asset('storage/'.$this->article->image->url)
                $this->options['image'] = asset('storage/'.$this->article->image->url); # code...
                
            } else {
                $this->options['image'] = asset('public_html/public/storage/articles/def.jpg');
               
            }
            

            
              
        $this->options['warehouse'] = $this->warehouses_name;
        $this->options['id_dopp'] = $this->article->id_dopp;
        $this->options['id_eetc'] = $this->article->id_eetc;
        $this->options['id_art'] = $this->article->id;
        $this->options['line_color'] = $this->line_color;
        return $this->quantity;
    }



    public function updateqtyId($value){
        $warehouse = $this->article->warehouses->find($value);
        $this->quantity = qty_available($this->article->id, $this->WarehouseId);
        $this->options['warehouse'] = $warehouse->name;
     
    }



  public function addItem(){
        Cart::add([ 'id' => $this->WarehouseId,
                    'name' => $this->article->name, 
                    'qty' => $this->qty,
                    'price'=>0,
                    'weight'=>550,
                    'options' =>$this->options, 
                                    // 'warehouse' => $this->existence->warehouse->name,  
                           
                    
        ]);
        $this->quantity = qty_available($this->article->id, $this->WarehouseId);
        $this->reset('qty');
        $this->emitTo('dropdown-cart','render');  
        // $this->emitTo('add-cart-item','render');  
    
        
    }
    public function increment(){
        $this->qty= $this->qty + 1;
    }
    
    public function decrement(){
        $this->qty= $this->qty - 1;
    }



    public function render()
    {
       return view('livewire.add-cart-item');
    }
}
