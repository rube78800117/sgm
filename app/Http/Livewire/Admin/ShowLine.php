<?php
namespace App\Http\Livewire\Admin;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
class ShowLine extends Component
{
    public $line, $stations, $station, $warehouses, $stationid='1';

  public $createForm=[
        'name'=>null,
        'slug'=>null,
       
    ];

    
    protected $rules=[
        'createForm.name'=>'required',
        'createForm.slug'=>'required|unique:categories,slug',
      
        
    ];


    protected $validationAttributes = [
        'createForm.name'=>'nombre',
        'createForm.slug'=>'slug'
       
    ];

 
  
    public function mount(Line $line, Station $station){
    $this->line = $line;
    // dd($line);
    
    $this->getStations();
    $this->getWarehouses();
    }
         //line tabla department, en esta funcion se obtiene las subcategorias de la tabla categories que tiene el modelo line
    public function getStations(){
    $this->stations=Station::where('line_id', $this->line->id)->get();
    }

    public function getWarehouses(){
        $this->warehouses=Warehouse::where('station_id', $this->stationid )->get();
        }
    

    public function updatedCreateFormName($value){
    $this->createForm['slug']=Str::slug($value);
    
     }

    
    public function save(){
        $this->validate();
        
        $this->line->stations()->create([
            'name'=>$this->createForm['name'],
            'slug'=>$this->createForm['slug']
        ]);
        
        $this->reset('createForm');
        $this->getStations();
    }

   // line es en nuestro caso  es la subcategoria y Departamento  la categoria
    public function edit(line $station){

    }

    public function render()
    {
        return view('livewire.admin.show-line')->layout('layouts.admin');
    }
}














