<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Collection;
use App\Models\Vendor;
use App\Models\Article;
use App\Models\Count;
use App\Models\CountDetail;
use App\Models\Line;
use App\Models\Location;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Sector;
use App\Models\Station;
use App\Models\Type_voucher;
use App\Models\Warehouse;


use Error;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use League\CommonMark\Util\LinkParserHelper;

class CreateListDetail extends Component
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
    public $lines, $lineselect = 1,$key=-1, $lineSelected, $stations, $warehouses, $sectors,$location ,$locations, $stationselect, $warehouseselect, $sectorselect, $locationselect, $linewarehouse;
    protected $listeners = ['updatedart' => 'updatedart', 'variableEnviada'];

    public $idart = 1;  //se establese como articulo seleccionado el primer producto por defecto para la vista detaill 
    public  $articlesel;
    public $nombre_art = "Seleccione un articulo";
    public $id_art, $id_dopp_art, $id_eetc_art, $id_zona_art;
    public $unit;
    public $cod_document =' 06/2024', $purchase_description= 'Primeros ingresos', $state_id = 1, $voucher_select = 3, $proveedor_id;
    public $savem, $keySearch=-1;
    public $variableRecibida;



// funcion que recibe los id de los relevamientos seccionados para la importacion a lista de actualizaion de stok
    public function variableEnviada($variable)
    {
        $this->variableRecibida = $variable;
        // dd($this->variableRecibida);
        // cargar en el array las listas de los registros seleccionados 
        
        $articles = CountDetail::whereIn('count_id', $variable)->get();
        // Suponiendo que $selectedArticles es una colección de artículos


        foreach ($articles as $key => $product) {

            // dd($product->article->id_dopp);

            $results = array(

                'article_id' => $product->article_id,
                'article_id_dopp' =>  $product->article->id_dopp,
                'article_id_eetc' => $product->article->id_eetc,
                'article_id_zona' => $product->article->id_zona,
                'article_name' => $product->article->name,
                'quantity' => $product->quantity,
                'due_date' => $product->article->due_date,
                'unit_name' => $product->article->unit->name,
                'warehouse_name' =>$product->warehouse_name,
                'warehouse_id' => $product->warehouse_id,

            );

         
        $this->selectedArticles[]= $results;
           
        }

   
    }

    public function searchArray()
    {
        if (!(empty($this->search) || $this->search === null)) {
            $found = false;
            $searchValue = $this->search; // Suponiendo que 'search' es la variable del input con wire:model
        
            // Verificar si el artículo ya existe en el array
            foreach ($this->selectedArticles as $clave => $articulo) {
                if (
                    $articulo['article_id_dopp'] == $searchValue ||
                    $articulo['article_name'] == $searchValue ||
                    $articulo['article_id_eetc'] == $searchValue ||
                    $articulo['article_id_zona'] == $searchValue
                ) {
                    $found = true;
                    $this->keySearch = $clave;
                    break;
                }
            }
        
         
            
            if ($found) {
                $this->alertSearch();
            }  else {
                $this->alertInfoSearch(); # code...
            }
        
        }
        
       
    }

   
    public function updatedart($value)
    {
        $this->idart = $value;
        $this->emit('article_changed', ['articlesel' => $value]);
        $this->articlesel = Article::where('id', 'LIKE', $this->idart)->first();
        $this->id_art = $this->articlesel->id;
        $this->nombre_art = $this->articlesel->name;
        $this->id_dopp_art = $this->articlesel->id_dopp;
        $this->id_eetc_art = $this->articlesel->id_eetc;
        $this->id_zona_art = $this->articlesel->id_zona;
        $this->unit = $this->articlesel->unit->name;
    }






    public function mount()
    {
        $this->lines = Line::all();
        $this->types_voucher = Type_voucher::all();
    }


    public function render()
    {




        $this->updatingSel();
        return view('livewire.admin.create-list-detail',  [
            'selectedItems' => $this->fetch()
        ]);
    }


    public $selectedArticles = [];
    public $results = [];
    public $quantity;
    public $article_id; //variable inecesaria eliminar despues
    public $warehouse_id, $warehouse_name;
    public $warehouse;
    public $due_date;


    public function addArticle()


    {
        $this->validate([
            'quantity' => 'required|numeric|min:1|max:9999',

            // 'linewarehouse' => 'required',
            'stationselect' => 'required',
            'warehouseselect' => 'required',
            'sectorselect' => 'required',
            'locationselect' => 'required',
            'id_art' => 'required',
            'selectedArticles.*' => 'required',



        ]);
        //verifica si existe o no en la lista de detalles el nuevo registro que se quiere introducir
        if (in_array($this->id_art, array_column($this->selectedArticles, 'article_id')) && in_array($this->warehouse_id, array_column($this->selectedArticles, 'warehouse_id'))) {
 // Busca la clave del artículo que coincide con $this->id_art


 foreach ($this->selectedArticles as $clave => $articulo) {
            if ($articulo['article_id'] == $this->id_art && $articulo['warehouse_id'] == $this->warehouse_id) {
                
                $this->key = $clave;
            }
        
        }
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
                    'due_date' => $this->due_date,
                    'unit_name' => $this->unit,
                    'warehouse_name' => $this->warehouse->name,
                    'warehouse_id' => $this->warehouse->id,
                );

                // dd($selectedArticles );
                $this->selectedArticles[] = $selectedArticles;
                $this->selectedArticles = $this->selectedArticles;
             

                // Toastr::success('se adiciono correctamente','', ["positionClass" => "toast-top-left"]);
                $this->emit('msbox', 'agregado con exito');
            }
            // $this->savem = "Se agrego correctamente";
     $this->alertInfo();
         


           
        }
    }



    public function importSurvey (){

        $survey = Count::get();
    // dd($survey);


        
    }



    // public function storeSurvey()
    // {
    //     $this->validate([
    //         'purchase_description' => 'required',
    //         'cod_document' => 'required',
    //         'state_id' => 'required',
    //         'proveedor_id' => 'required',
    //         'voucher_select' => 'required',
    //         'lineselect' => 'required',

    //     ]);



    //     DB::transaction(function () {

    //         $order = new Purchase();

    //         $order->description = $this->purchase_description;
    //         $order->ndocument = $this->cod_document;
    //         $order->user_id = auth()->user()->id;
    //         $order->state_id = $this->state_id;
    //         $order->vendor_id = $this->proveedor_id;
    //         $order->type_voucher_id = $this->voucher_select;
    //         $order->line_id = $this->lineselect;

    //         $order->save();

    //         foreach ($this->selectedArticles as $key => $product) {
    //             $results = array(

    //                 "purchase_id" => $order['id'],
    //                 "quantity" => $product['quantity'],
    //                 "article_id" => $product['article_id'],
    //                 "article_name" => $product['article_name'],
    //                 "due_date" => $product['due_date'],
    //                 "warehouse_id" => $product['warehouse_id'],
    //                 "warehouse_name" => $product['warehouse_name'],
    //                 "created_at" => now(),
    //                 "updated_at" => now()


    //             );

    //             PurchaseDetail::insert($results);   //inserta uno a uno los registros resultante del array anterior $results

    //             $results = collect($results);
    //             $results2 = json_decode(json_encode($results)); //convierte array  en una coleccion

    //             increase($results2);
    //         }
    //     });

    

    //    $this->alertSuccess();
    //     // ambas lineas redireccionan 
    //     return redirect()->to('admin/ingresos/create');
     
    // }










    public function storeOrder()
    {
        $this->validate([
            'purchase_description' => 'required',
            'cod_document' => 'required',
            'state_id' => 'required',
            'proveedor_id' => 'required',
            'voucher_select' => 'required',
            'lineselect' => 'required',
            'selectedArticles' => 'required',

        ]);



        DB::transaction(function () {

            $order = new Purchase();

            $order->description = $this->purchase_description;
            $order->ndocument = $this->cod_document;
            $order->user_id = auth()->user()->id;
            $order->state_id = $this->state_id;
            $order->vendor_id = $this->proveedor_id;
            $order->type_voucher_id = $this->voucher_select;
            $order->line_id = $this->lineselect;
          
        
      
            

            $order->save();

            foreach ($this->selectedArticles as $key => $product) {
                $results = array(

                    "purchase_id" => $order['id'],
                    "quantity" => $product['quantity'],
                    "article_id" => $product['article_id'],
                    "article_name" => $product['article_name'],
                    "due_date" => $product['due_date'],
                
                    "warehouse_id" => $this->warehouse->id,
                    "warehouse_name" => $this->warehouse->name,
                     // "control_date" => Carbon::today(),
                    "max_storage_time" => "1",
                    "created_at" => now(),
                    "updated_at" => now()


                );

                PurchaseDetail::insert($results);   //inserta uno a uno los registros resultante del array anterior $results
                $results["location_id"] = $this->location->id;
                $results = collect($results);
                $results2 = json_decode(json_encode($results)); //convierte array  en una coleccion




                increase($results2);
            }
        });

    
        // Toastr::success('Se guardo correctamente', 'Nuevo Ingreso', ["positionClass" => "toast-top-right"]);

       $this->alertSuccess();
        // ambas lineas redireccionan 
        return redirect()->to('admin/ingresos/create');
        // return redirect('admin/redirect');
    }


    public function removeIttem($id)
    {
        unset($this->selectedArticles[$id]);
    }




    public function fetch()
    {
        $this->items = Vendor::where('name', 'LIKE', '%' . $this->searchText . '%')
            ->whereNotIn('id', $this->selectedIds)
            ->limit(10)
            ->get();


        return Vendor::query()->whereIn('id', $this->selectedIds)->get();
    }



    public function choose($id)
    {
        $this->proveedor_id = $id;
        $this->selectedIds = []; // borra la matriz para permitir una sola eleccion de proveedor
        $this->selectedIds[] = $id; // adiciona elementos a la matriz

    }



    public function remove($id)
    {
        $this->selectedIds = array_filter($this->selectedIds, function ($el) use ($id) {
            return $el !== $id;
        });
        $this->proveedor_id = "";
    }


    public function updatedLineselect($line_id)
    {
        
        $this->lineSelected = Line::where('id', $line_id)->first();
        $this->updatedLinewarehouse($this->lineSelected->id);
    // $this->linewarehouse= $this->lineSelected;

    }








    

    public function updatedLinewarehouse($line_id)
    {
        

        $this->stations = Station::where('line_id',  $line_id)->get();
        $stations = $this->stations;
        $stationselect="";
        $warehouseselect="";
        $locationselect="";
        $locationselect="";

    }


    public function updatedStationselect($station_id)
    {
    

        $this->warehouses = Warehouse::where('station_id', 'LIKE', $station_id)->get();
        $warehouses = $this->warehouses;
    }


    public function updatedWarehouseselect($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;

        $this->warehouse = Warehouse::where('id', 'LIKE', $warehouse_id)->first();
        $warehouse = $this->warehouse;

        $this->sectors = Sector::where('warehouse_id', 'LIKE', $this->warehouse_id)->get();
        $sectors = $this->sectors;




    }

    public function updatedSectorselect($sector_id)
  
    {  
        $this->locations = Location::where('sector_id', 'LIKE', $sector_id)->get();
        $locations = $this->locations;
    }
    public function updatedLocationselect($location_id)
  
    {  
        $this->location = Location::where('id', 'LIKE', $location_id)->first();
        $location = $this->location;
    }
   
   
    



 // mensages de alerta

 public function alertSearch()
 {
     $this->dispatchBrowserEvent('alerttoastr', 
     ['type' => 'success',  'message' => 'El articulo se encontro en la lista!, Numero de registro: '. $this->keySearch+1 ]);
           
 }
 public function alertInfoSearch()
 {
    $this->dispatchBrowserEvent('alerttoastr',
    ['type' => 'warning',  'message' => 'El articulo no se encontro en la lista!, asegurece de escribir el iD completo']);
 }


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


 public function alertInfo()
 {
     $this->dispatchBrowserEvent('alerttoastr', 
             ['type' => 'info',  'message' => 'Se agrego correctamente!']);
         
 }

   





}
