<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
// use Livewire\WithFileUploads;
use App\Models\Line;
use App\Models\Zone;
class CreateLine extends Component
{
    // use WithFileUploads;

    public $lines, $line, $station, $cadenacolor, $zones;
    public $selectedColor = null;
    protected $listeners = ['colorSelected' => 'updateSelectedColor'];
    public $createForm=[
        'name'=>null,
        'slug'=>null,
        'acronym'=>null,
        'color'=>null,
        'zone_id'=>null,
    ];


    public $editForm = [
        'open'=>false,
        'name'=>null,
        'slug'=>null,
        'acronym'=>null,
        'color'=>null,
        'zone_id'=>null,
    ];
       
    
        public function mount(Line $line){
        $this->line = $line;
        $this->zones =Zone::all();
      
        $this->getLines();
        }

    protected $rules = [
        'createForm.name'=>'required',
        'createForm.slug'=>'required|unique:departments,slug',
        'createForm.acronym' => 'required',
        'createForm.color' => 'required',
        'createForm.zone_select' => 'required',
        
    ];
    protected $validationAttributes =[
        'createForm.name'=>'nombre',
        'createForm.slug'=>'slug',
        'createForm.acronym' => 'acronimo',
        'createForm.color' => 'color',
        'createForm.zone_select' => 'zona',
        'editForm.name'=>'nombre',
        'editForm.slug'=>'slug',
        'editForm.acronym' => 'acronimo',
        'editForm.color' => 'color',
        'editForm.zone_select' => 'zona',



        
    ];

    public function updatedCreateFormName($value){
        $this->createForm['slug']= str::slug($value);
        
    }
    
    public function updatedEditFormName($value)
    {
        $this->editForm['slug'] = str::slug($value);
    }





    public function edit(Line $line)
    {
    //    dd($line);
        $this->resetValidation();
        $this->line = $line;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $line->name;
        $this->editForm['slug'] = $line->slug;
        $this->editForm['acronym'] = $line->acronym;
        $this->editForm['color'] = $line->color;
        $this->editForm['zone_id'] = $line->zone_id;
    
    }



    public function update()
    {
        $rules = [
            'editForm.name' => 'required',
            'editForm.slug' => 'required|unique:lines,slug,'.$this->line->id,
            'editForm.acronym' => 'required',
            'editForm.color' => 'required',
            'editForm.zone_id' => 'required',
           
        ];
    

    
        $this->validate($rules);
    
      
    // dd($this->editForm);
        $this->line->update($this->editForm);
        $this->reset(['editForm']);
        $this->getLines();



    }





 public function updateSelectedColor($color){
    // dd($color);
    $this->selectedColor = $color;
    $this->createForm['color'] = $color;
    $this->editForm['color'] = $color;

 }






    public function getLines(){
        $this->lines = Line::all();
    }


    public function save(){
         $this->validate();
        
    $cadenacolor =str_replace(' ', '', strtolower($this->createForm['color']));
        $line = Line::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'acronym' => strtoupper($this->createForm['acronym']),
              'color' => $cadenacolor,
              'zone_id' =>$this->createForm['zone_select'],
            // 'color' => $this->createForm['color'],
        ]);

           
       

             $this->reset('createForm');
             $this->getLines();
             $this->emit('saved');
            
           
        }




    public function render()
    {
        return view('livewire.admin.create-line');
    }
}
