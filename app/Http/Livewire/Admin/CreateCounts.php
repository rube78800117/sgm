<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Vendor;
use App\Models\Article;
use App\Models\Line;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Station;
use App\Models\Type_voucher;
use App\Models\Warehouse;
use App\Models\Count;
use App\Models\CountDetail;
use Error;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
// use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class CreateCounts extends Component
{


   // PROVEEDORES SELECTED STAR


   public string $searchText = '';
   public Collection $items;
   public array $selectedIds = [];
   public string $model;
   public string $label;
   public $article;
   public $search, $idsearch; //vARIABLES PARA EL BUSCADOR DE PRODUCTOS
   public $types_voucher = 3;
   public $lines, $lineselect, $key=-1, $stations, $warehouses,  $stationselect, $warehouseselect, $linewarehouse;
  

   public $idart = 1;  //se establese como articulo seleccionado el primer producto por defecto para la vista detaill 
   public $articlesel;
   public $nombre_art = "Seleccione un articulo";
   public $id_art, $id_dopp_art, $id_eetc_art, $id_zona_art;
   public $unit;
   public $purchase_description = "Relevamiento de materiales y repuestos 2024", $state_id = 1; //se inicializa 1 estado 
   public $savem;
   public $descriptionCount; // input detalle de relevamiento 

//  protected $listeners = ['updatedart' => 'updatedart', 'storeOrder'=>'storeOrder'];

protected $listeners = ['updatedart','storeOrder'];

// ACTUALIZA LAS VARIABLES CON EL ARTICULO SELECCIONADO 

   public function updatedart($value)
   {
       $this->idart = $value;
       $this->emit('article_changed', ['articlesel' => $value]);

       $this->articlesel = Article::where('id', 'LIKE', $this->idart)->first(); // recupera ogjeto de tabla con idart seleccionado mediante una consulta
       
    //    Se hace la actualzacion de datos
       $this->id_art = $this->articlesel->id;
       $this->nombre_art = $this->articlesel->name;
       $this->id_dopp_art = $this->articlesel->id_dopp;
       $this->id_eetc_art = $this->articlesel->id_eetc;
       $this->id_zona_art = $this->articlesel->id_zona;
       $this->unit = $this->articlesel->unit->name;

    

   }





// RECARGA TODAS LAS LINEAS DISPONIBLES
   public function mount()
   {
       $this->lines = Line::all();

   }


   public function render()
   {
       $this->updatingSel();
       return view('livewire.admin.create-counts');
   }



   public $selectedArticles = [];
   public $quantity;
   public $observation;
   public $article_id; 
   public $warehouse_id, $warehouse_name;
   public $warehouse;
//    public $due_date;





// adiciona articulos  en un arrary  $selectedArticles (articulos seleccionados)
   public function addArticle()


   {
       $this->validate([
           'quantity' => 'required|numeric|min:1|max:9999',
           'linewarehouse' => 'required',
           'stationselect' => 'required',
           'warehouseselect' => 'required',
           'id_art' => 'required',


       ]);
       //verifica si existe o no en la lista de detalles el nuevo registro que se quiere introducir si ya esta muestra erro y si no se actualiza el array con el nuevo registro
       if (in_array($this->id_art, array_column($this->selectedArticles, 'article_id')) && in_array($this->warehouse_id, array_column($this->selectedArticles, 'warehouse_id'))) {

        // Busca la clave del artículo que coincide con $this->id_art ide de articulo seleccionado o id de almacen seleccionado para luego mostrar por pantalla cual es el ID la lista ya ingresado anteriormente 
        foreach ($this->selectedArticles as $clave => $articulo) {
           if ($articulo['article_id'] == $this->id_art && $articulo['warehouse_id'] == $this->warehouse_id) {
               
               $this->key = $clave;
           }
       
       }
    //    muestra el error de articulo ya existente con el key de posicion en la lista 
            $this->alertError($this->key);

       } else {

           if ($this->quantity == '') {
           } else {

               $selectedArticles = array(
                   'article_id' => $this->id_art,
                   'article_id_dopp' => $this->id_dopp_art,
                   'article_id_eetc' => $this->id_eetc_art,
                   'article_id_zona' => $this->id_zona_art,
                   'article_name' => $this->nombre_art,
                   'quantity' => $this->quantity,
                   'unit_name' => $this->unit,
                   'warehouse_name' => $this->warehouse->name,
                   'warehouse_id' => $this->warehouse->id,
                //    'line_id' => $this->warehouse->station->line->id,
              
               );



               $this->selectedArticles[] = $selectedArticles;
               $this->selectedArticles = $this->selectedArticles;
            

            


               // Se emite el mensaje de exito
               $this->emit('msbox', 'agregado con exito');
           }
    

        //    muestra el mensaje de alerta para articulo ya ingresado en la lista 
        $this->alertInfo();
        
 
          
       }
   }
  

   public function storeOrder()
   {
    
   try {
    $this->validate([
        'purchase_description' => 'required', 
        'descriptionCount' => 'required', 
        'linewarehouse' => 'required',
        'stationselect' => 'required',
        'warehouseselect' => 'required',
        'state_id' => 'required',
        'selectedArticles'=> 'required'


            
    ]);

    // si la validación es exitosa:


                    DB::transaction(function () {

                        $order = new Count();
                        $order->name = $this->purchase_description;
                        $order->description = $this->descriptionCount;
                        $order->observation = $this->observation;
                        $order->user_id = auth()->user()->id;
                        $order->status = $this->state_id;
                        $order->warehouse_id = $this->warehouseselect;
                        $order->line_id = $this->linewarehouse;
                        $order->closing_date = Carbon::today() ;

                        $order->save();

                        foreach ($this->selectedArticles as $key => $product) {
                            $results = array(

                                "count_id" => $order['id'],
                                "quantity" => $product['quantity'],
                                "article_id" => $product['article_id'],
                                "article_name" => $product['article_name'],
                                "warehouse_id" => $product['warehouse_id'],
                                "warehouse_name" => $product['warehouse_name'],
                                // "created_at" => now(),
                                // "updated_at" => now()


                            );

                            CountDetail::insert($results);   //inserta uno a uno los registros resultante del array anterior $results

                            $results = collect($results);
                            $results2 = json_decode(json_encode($results)); //convierte array  en una coleccion




                        //    increase($results2);
                        }
                    }
                
                     );


// Toastr::success('Se guardo correctamente', 'Nuevo Ingreso', ["positionClass" => "toast-top-right"]);




$this->alertSuccess();
       // ambas lineas redireccionan 
       return redirect()->to('admin/counts/create');
       
       // return redirect('admin/redirect');


        } catch (ValidationException $e) {
              
        }



   }


   public function removeIttem($id)
   {
       unset($this->selectedArticles[$id]);
   }









   public function remove($id)
   {
       $this->selectedIds = array_filter($this->selectedIds, function ($el) use ($id) {
           return $el !== $id;
       });
      
   }




   public function updatedLinewarehouse($line_id)
   {
       $this->line_id = $line_id;

       $this->stations = Station::where('line_id', 'LIKE', $this->line_id)->get();
       $stations = $this->stations;
   }


   public function updatedStationselect($station_id)
   {
       $this->station_id = $station_id;

       $this->warehouses = Warehouse::where('station_id', 'LIKE', $this->station_id)->get();
       $warehouses = $this->warehouses;
   }


   public function updatedWarehouseselect($warehouse_id)
   {
       $this->warehouse_id = $warehouse_id;

       $this->warehouse = Warehouse::where('id', 'LIKE', $this->warehouse_id)->first();
       $warehouse = $this->warehouse;
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
            ['type' => 'error',  'message' => 'El articulo ya esta en la lista!, Numero de registro: '. $key+1 ]);
         
}



public function alertErrorSave($errorMessage)
{
    $this->dispatchBrowserEvent('alerttoastr', 
            ['type' => 'error',  'message' => 'No se pudo guardar la lista por que hay campos importantes sin llenar, llene todos los campos porfavor!, ' , $errorMessage]);
         
}


public function alertInfo()
{
    $this->dispatchBrowserEvent('alerttoastr', 
            ['type' => 'info',  'message' => 'Se agrego correctamente!']);
        
}

  








   
}
