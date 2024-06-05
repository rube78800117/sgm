<?php

// namespace App\Http\Livewire\Admin;

// use Livewire\Component;

// class ShowSector extends Component
// {
//     public function render()
//     {
        

//         return view('livewire.admin.show-sector');
//     }
// }

 
namespace App\Http\Livewire\Admin;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Warehouse;
use App\Models\Sector;
use Illuminate\Queue\Listener;

class ShowSector extends Component
{
    public $warehouse, $sector, $categ, $department, $sectors, $subcategory;

 protected $listeners = ['delete'];

    public $createForm = [
        'name' => '',
       
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
    
     ];
  
    protected $rules = [
        'createForm.name' => 'required',
        // 'createForm.slug'=>'required|unique:categories,slug',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
    
        'editForm.name' => 'nombre',
    
     
    ];

    public function mount(Warehouse $warehouse)
    {   
                
        $this->warehouse = $warehouse;    
        $this->getSectors();  
      

        // dd($warehouse);
    }

    //category tabla Warehouse, en esta funcion se obtiene los sectores de la tabla  sectors que tiene el modelo Sector
    public function getSectors()
    {

        $this->sectors = Sector::where('warehouse_id', $this->warehouse->id)->get();
        // dd($this->sectors );
    }

    public function updatedCreateFormName($value)
    {
        // $this->createForm['slug'] = Str::slug($value);
    }

    public function updatedEditFormName($value)
    {
        // $this->editForm['slug'] = str::slug($value);
    }


    public function save()
    {
        // Validar los datos del formulario
        $this->validate();
    
        // Crear un nuevo sector en el almacén
        $this->warehouse->sectors()->create([
            'name' => $this->createForm['name'],
            'warehouse_id' => $this->warehouse->id,
            // 'slug' => $this->createForm['slug'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Resetear el formulario
        $this->reset('createForm');
    
        // Obtener la lista de sectores actualizada
        $this->getSectors();
    }

    // category es en nuestro caso  es la subcategoria y Departamento  la categoria
    

    public function update()
    {

        
    
        $rules = [
            'editForm.name' => 'required',

            // 'editForm.slug' => 'required|unique:sectors,id,' . $this->sector->id,

            // 'editImage'=>'image|max:1024',
        ];
    
        // if ($this->editImage) {
        //     $rules['editImage'] = 'required|image|max:1024';
        // }
    
        $this->validate($rules);
    
        // if ($this->editImage) {
        //     // Elimina el archivo anterior
        //     Storage::delete($this->department->image->url);
    
        //     // Guarda el nuevo archivo
        //     $this->editForm['image'] = $this->editImage->store('categories');
    
        //     // Actualiza el nombre del archivo en la tabla polimórfica
        //     $this->department->image()->update(['url' => $this->editForm['image']]);
        // }
    
        $this->sector->update($this->editForm);
        $this->reset(['editForm']);
        $this->getSectors();
        
    }


    public function delete(Sector $sector)
    { 
       
        $sector->delete();
        $this->getSectors();
    }

    public function edit(Sector $sector)
    {
        // dd($subcategory);
        $this->resetValidation();
        $this->sector = $sector;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $sector->name;

   
    }





    public function render()
    {
        return view('livewire.admin.show-sector')->layout('layouts.admin');
    }
}
