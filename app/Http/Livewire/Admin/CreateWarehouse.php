<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Warehouse;
use App\Models\Station;
class CreateWarehouse extends Component
{


    public $warehouse, $warehouses, $station;

    public $createForm=[
        'name'=>null,
        'slug'=>null,
        'description'=>null,
        'warehouse_category'=>null,
        // 'color'=>null,
    ];

    public function mount(Warehouse $warehouse){
        $this->warehouse = $warehouse;
        $this->getWarehouses();
        }

    protected $rules = [
        'createForm.name'=>'required',
        'createForm.slug'=>'required|unique:departments,slug',
        'createForm.description'=>'required',
        'createForm.warehouse_category'=>'required',
        
    ];
    protected $validationAttributes =[
        'createForm.name'=>'nombre',
        'createForm.slug'=>'slug',
        'createForm.description'=>'Descripción',
        'createForm.warehouse_category'=>'categoria o tipo de almacén',
        
    ];

    public function updatedCreateFormName($value){
        $this->createForm['slug']= str::slug($value);
    }
    
    public function getWarehouses(){
        // $this->warehouses = warehouse::all();
        $this->warehouses=Warehouse::where('station_id', $station)->get();
    }


    public function save(){
         $this->validate();
        

        $line = Warehouse::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'description' => $this->createForm['description'],
            'warehouse_category' => $this->createForm['warehouse_category'],
           
        ]);

           
       

             $this->reset('createForm');
             $this->getWarehouses();
             $this->emit('saved');
            
           
        }













    public function render()
    {
        return view('livewire.admin.create-warehouse');
    }
}
