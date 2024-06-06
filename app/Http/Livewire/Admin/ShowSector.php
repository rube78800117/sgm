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
    public $warehouse, $sector, $categ, $department, $sectors, $subcategory, $newSector;
    public $columns = 1;
    public $levels = 1;
    public $columnsData = [];
    public $combinedArray = [];

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
        $newSector = $this->warehouse->sectors()->create([
            'name' => $this->createForm['name'],
            'warehouse_id' => $this->warehouse->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // dd($newSector);
        // Obtener el ID del nuevo sector
        $newSector_id = $newSector->id;

        // Crear las localizaciones para el nuevo sector
        foreach ($this->combinedArray as $name) {
            $newSector->locations()->create([
                'name' => $name,
                'sector_id' => $newSector_id,
            ]);
        }

        $this->reset('createForm'); // Resetear el formulario
        $this->getSectors(); // Obtener la lista de sectores actualizada
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

    public function generate()
    {
        // $this->validate([
        //     'columns' => 'required|integer|min:1',
        //     'levels' => 'required|integer|min:1|max:26', // Máximo de 26 niveles debido a las letras del alfabeto
        // ]);

        $this->columnsData = [];

        $letters = range('A', 'Z');

        for ($i = 0; $i < $this->columns; $i++) {
            $levels = [];
            for ($j = 0; $j < $this->levels; $j++) {
                $levels[] = [
                    'column' => $i + 1,
                    'level' => $letters[$j],
                ];
            }

            $this->columnsData[] = $levels;
            // dd($this->columnsData);
            // Invertir el orden de los niveles
        }
        $combinedArray = [];

        foreach ($this->columnsData as $subArray) {
            foreach ($subArray as $item) {
                $combinedArray[] = 'Columna:' . $item['column'] . '-' . 'Nivel:' . $item['level'];
                $this->combinedArray = $combinedArray;
            }
        }

        //  dd($combinedArray);
    }

    public function render()
    {
        return view('livewire.admin.show-sector')->layout('layouts.admin');
    }
}
