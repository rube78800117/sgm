<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\Trademark;

class CreateBrand extends Component
{   public $brands, $brand;
    protected $listeners=['delete'];

    public $createForm=[ 
        'name'=> null,
    ];
    public $editForm=[ 
        'open'=>false,
        'name'=>null
    ];
    public $rules = [ 
        
        'createForm.name'=>'required'
    ];

    protected $validationAttributes=[
        'createForm.name'=>'nombre',
        'editForm.name'=>'nombre'
    ];


    
    public function mount(){
        $this->getBrands();
    }

    public function getBrands(){
        $this->brands=Trademark::all();
    }



    public function save(){
        $this->validate();
        Trademark::create($this->createForm);
        $this->reset('createForm');
        $this->getBrands();
     

    }
   

    public function edit(Trademark $brand){
        $this->brand= $brand;
        $this->createForm['open']=true;
        $this->createForm['name']=$brand->name;
       
      
    }

    public function update(){
        $this->validate([
            'editForm.name'=>'name'
        ]);
        $this->brand->update($this->editForm);
        $this->reset('editForm');
        $this->getBrands();
    }



    public function delete(Trademark $brand){
        $brand->delete();
        $this->getBrands();
    }

    public function render()
    {
        return view('livewire.admin.create-brand')->layout('layouts.admin');
    }
}
