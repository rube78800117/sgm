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

use App\Models\Location;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Warehouse;
use App\Models\Sector;
use Illuminate\Queue\Listener;

class ShowSector extends Component
{
    public $warehouse, $sector, $categ, $department, $sectors, $subcategory, $newSector;
    public $columns = 1;
    public $locations;
    public $levels = 1;
    public $columnsData = [];
    public $combinedArray = [];
    public $locationName;

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
        // 'createForm.'=>'required|unique:categories,slug',
        'combinedArray' => 'required|array',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'combinedArray' => 'generar columnas y niveles',
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
    }

    public function getLocations($sectorId)
    {
        $this->locations = Location::where('sector_id', $sectorId)->get();
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
        $this->combinedArray = '';
        $this->getSectors(); // Obtener la lista de sectores actualizada
        $this->combinedArray = [];
        $this->columns = '';
        $this->levels = '';
        $this->generate();
    }

    // category es en nuestro caso  es la subcategoria y Departamento  la categoria

    public function update()
    {
        $rules = [
            'editForm.name' => 'required',
        ];

        $this->validate($rules);

        $this->sector->update($this->editForm);
        $this->reset(['editForm']);
        $this->getSectors();
    }

    public function delete(Sector $sector)
    {
        $sector->locations()->delete();
        $sector->delete();
        $this->getSectors();
    }

    public function edit(Sector $sector)
    {
        //    dd($sector);
        $this->resetValidation();

        $this->sector = $sector;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $sector->name;
        $this->editForm['locations'] = $sector->locations()->pluck('id', 'name')->toArray();
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

    public function editLocation($locationId)
    {
        $location = Location::find($locationId);
    }

    public function updateLocation($locationId, $name)
    {
        $location = Location::find($locationId);
        $location->update(['name' => $name]);
        // $this->dispatchBrowserEvent('notify', 'Localización actualizada correctamente.');
        $this->update();

    }

    public function deleteLocation($locationId)
    {
        Location::find($locationId)->delete();
        $this->dispatchBrowserEvent('notify', 'Localización eliminada correctamente.');
        $this->getSectors();
        // $this->getLocations($this->sector->id);
    }

    public function removeLocation($locationId)
    {
        $this->deleteLocation($locationId);
        $this->edit($this->sector);
    }

    public function addLocation()
    {
        $this->validate([
            'locationName' => 'required|string|max:255',
        ]);

        Location::create([
            'name' => $this->locationName,
            'sector_id' => $this->sector->id,
        ]);

        $this->dispatchBrowserEvent('notify', 'Localización agregada correctamente.');
        // $this->locationName = '';
        $this->getSectors();
     
       $this->edit($this->sector);
    }
    public function render()
    {
        return view('livewire.admin.show-sector')->layout('layouts.admin');
    }
}
