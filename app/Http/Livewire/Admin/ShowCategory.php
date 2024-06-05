<?php
 
namespace App\Http\Livewire\Admin;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Department;
use App\Models\Category;
use Illuminate\Queue\Listener;

class ShowCategory extends Component
{
    public $category, $subcategories, $categ, $department, $subcategory;

 protected $listeners = ['delete'];





    public $createForm = [
        'name' => '',
        'slug' => 'slug',
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
        'slug' => null,
     ];
 
 
 
    protected $rules = [
        'createForm.name' => 'required',
        // 'createForm.slug'=>'required|unique:categories,slug',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
        'editForm.name' => 'nombre',
        'editForm.slug' => 'slug',
     
    ];

    public function mount(Department $category)
    {   
                   
        $this->department = $category;    
        $this->getSubcategories();  

        // dd($category);
    }

    //category tabla department, en esta funcion se obtiene las subcategorias de la tabla categories que tiene el modelo Category
    public function getSubcategories()
    {
        $this->subcategories = Category::where('department_id', $this->department->id)->get();
        // dd($this->subcategories );
    }

    public function updatedCreateFormName($value)
    {
        $this->createForm['slug'] = Str::slug($value);
    }

    public function updatedEditFormName($value)
    {
        $this->editForm['slug'] = str::slug($value);
    }


    public function save()
    {
        // dd($this->createForm['slug']);
        $this->validate();

        // dd( $this->category->categories());

        // dd($this->createForm['slug']);
        // dd($this->createForm);

        // dd($this->createForm['slug']);
        $this->department->categories()->create([
            'name' => $this->createForm['name'],
            'department_id' => $this->department->id,
            'slug' => $this->createForm['slug'],

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->reset('createForm');
        $this->getSubcategories();
    }

    // category es en nuestro caso  es la subcategoria y Departamento  la categoria
    

    public function update()
    {

        

        $rules = [
            'editForm.name' => 'required',
            'editForm.slug' => 'required|unique:categories,id,' . $this->subcategory->id,
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
    
        $this->subcategory->update($this->editForm);
        $this->reset(['editForm']);
        $this->getSubcategories();
    }


    public function delete(Category $subcategory)
    { 
       
        $subcategory->delete();
        $this->getSubcategories();
    }

    public function edit(Category $subcategory)
    {
        // dd($subcategory);
        $this->resetValidation();
        $this->subcategory = $subcategory;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $subcategory->name;
        $this->editForm['slug'] = $subcategory->slug;
   
    }





    public function render()
    {
        return view('livewire.admin.show-category')->layout('layouts.admin');
    }
}
