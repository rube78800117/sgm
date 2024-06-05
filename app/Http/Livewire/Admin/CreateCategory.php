<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class CreateCategory extends Component
{
    use WithFileUploads;
    protected $listeners = ['delete'];
    public $categories, $category, $department, $departments;
    public $editImage;

    public $createForm = [
        'name' => null,
        'slug' => null,
        'image' => null,
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
        'slug' => null,
        'image' => null,
    ];

    public function mount(Department $department)
    {
        $this->department = $department;
        $this->getCategories();
    }

    protected $rules = [
        'createForm.name' => 'required',
        'createForm.slug' => 'required|unique:departments,slug',
        'createForm.image' => 'required|image|max:1024',
    ];
    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
        'createForm.image' => 'imagen',
        'editForm.name' => 'nombre',
        'editForm.slug' => 'slug',
        'editImage' => 'imagen',
    ];

    public function updatedCreateFormName($value)
    {
        $this->createForm['slug'] = str::slug($value);
    }

    public function updatedEditFormName($value)
    {
        $this->editForm['slug'] = str::slug($value);
    }

    public function getCategories()
    {
        $this->departments = Department::all();
    }






    public function update()
    {
        $rules = [
            'editForm.name' => 'required',
            'editForm.slug' => 'required|unique:departments,slug,' . $this->department->id,
            // 'editImage'=>'image|max:1024',
        ];
    
        if ($this->editImage) {
            $rules['editImage'] = 'required|image|max:1024';
        }
    
        $this->validate($rules);
    
        if ($this->editImage) {
            // Elimina el archivo anterior
            Storage::delete($this->department->image->url);
    
            // Guarda el nuevo archivo
            $this->editForm['image'] = $this->editImage->store('categories');
    
            // Actualiza el nombre del archivo en la tabla polimórfica
            $this->department->image()->update(['url' => $this->editForm['image']]);
        }
    
        $this->department->update($this->editForm);
        $this->reset(['editForm', 'editImage']);
        $this->getCategories();
    }













    // public function update()
    // {
    //     $rules = [
    //         'editForm.name' => 'required',
    //         'editForm.slug' => 'required|unique:departments,slug,' . $this->department->id,
    //         // 'editImage'=>'image|max:1024',
    //     ];

    //     if ($this->editImage) {
    //         $rules['editImage'] = 'required|image|max:1024';
    //     }

    //     $this->validate($rules);

    //     if ($this->editImage) {
    //         Storage::delete($this->editForm['image']);
    //         $this->editForm['image'] = $this->editImage->store('categories');
    //     }

    //     $this->department->update($this->editForm);
    //     $this->department->image()->update(['url' => $this->editImage]);
    //     $this->reset(['editForm', 'editImage']);
    //     $this->getCategories();
    // }

    public function save()
    {
        $this->validate();
        $url = $this->createForm['image']->store('categories');

        // $department->image()->create(['url' => $url]);
        $department = Department::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
        ]);

        $department->image()->create(['url' => $url]);

        $this->reset('createForm');
        $this->getCategories();
        $this->emit('saved');
    }

    public function edit(Department $department)
    {
        $this->reset(['editImage']);
        $this->resetValidation();
        $this->department = $department;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $department->name;
        $this->editForm['slug'] = $department->slug;
        $this->editForm['image'] = $department->image->url;
    }

    public function delete(Department $department)
    { 
     
        $department->delete();
        $this->getCategories();
    }

    public function render()
    {
        return view('livewire.admin.create-category');
    }
}
