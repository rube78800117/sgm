<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Warehouse;
use App\Models\Station;
use App\Models\Images;
use Livewire\WithFileUploads;

class ShowWarehouse extends Component
{

    use WithFileUploads;
    public $warehouse, $warehouses, $station, $url;

    public $createForm=[
        'name'=>null,
        'slug'=>null,
        'description'=>null,
        // 'color'=>null,
    ];

    public function mount(Warehouse $warehouse, Station $station){

        $this->station = $station;
        $this->warehouse = $warehouse;
        
        $this->getWarehouses();
       
        }

        protected $rules = [
            'createForm.name'=>'required',
            'createForm.slug'=>'required|unique:departments,slug',
            'createForm.description'=>'required',
            // 'createForm.warehouse_category'=>'required',
            
        ];
        protected $validationAttributes =[
            'createForm.name'=>'nombre',
            'createForm.slug'=>'slug',
            'createForm.description'=>'Descripción',
            // 'createForm.warehouse_category'=>'categoria o tipo de almacén',
            
        ];

    public function updatedCreateFormName($value){
        $this->createForm['slug']= str::slug($value);
    }
    
    public function getWarehouses(){
        $this->warehouses=Warehouse::where('station_id', $this->station->id)->get();
        }


    public function save(){
         $this->validate();
         $this->station->warehouses()->create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'description' => $this->createForm['description'],
            'warehouse_category' => 1,
            // 'warehouse_category' => $this->createForm['warehouse_category'],
           
        ]);
        if(isset($this->createForm['image'])) {
            $url = $this->createForm['image']->store('almacenes');
            $id_img = $this->station->warehouses()->latest('id')->first();
            // dd($id_img);
            $id_img->image()->create(['url' => $url]);
        }
        
            $this->createForm['image'] = "";
             $this->reset('createForm');
          
             $this->getWarehouses();
             $this->emit('saved');
          
           
        }



       
        //
    
        // public function files(Warehouse $department, Request $request)
        // {
        //     $url = Storage::put('almacenes', $request->file('file'));
        //     // $department->image()->create([
        //     //     'url'=> $url
        //     // ]
    
        //     // );
    
        // }









    public function render()
    {
        return view('livewire.admin.show-warehouse')->layout('layouts.admin');
    }
}
