<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Article;
use App\Models\Department;
use App\Models\Trademark;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class EditArticle extends Component
{
    public $id_eetc, $id_dopp, $id_zona, $id_zonagen, $IDgenerate, $selectedInput;
    public $article, $categories, $brands, $units, $departments;
    public $department_id, $category_id, $slug, $images, $imagecontador, $department_id_sel, $categoryArticle, $departmentName;
    public $subcategory_id = '';
    public $subcategories = [];

    protected function rules()
    {
        return [
            'article.category_id' => 'required',
            'article.name' => 'required',
            'article.slug' => 'required|unique:articles,slug,' . $this->article->id,
            'article.description' => '',
            'article.id_dopp' => '',
            'article.id_eetc' => '',
            'article.id_zona' => 'required_without_all:article.id_eetc,article.id_dopp',
            'article.unit_id' => 'required',
            'article.stock_min' => 'required',
            'article.trademark_id' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // protected $rules = [

    //     'article.category_id' => 'required',
    //     'article.name' => 'required',
    //     'article.slug' => 'required|unique:articles,slug,' . $this->article->id,

    //     'article.description' => '',
    //     'article.id_dopp' => '',
    //     'article.id_eetc' => '',
    //     'article.id_zona' => 'required_without_all:article.id_eetc, article.id_dopp',
    //     'article.unit_id' => 'required',
    //     'article.stock_min' => 'required',
    //     'article.trademark_id' => 'required',
    // ];

    protected $listeners = ['refreshArticle', 'delete', 'deleteImage'];

    public function updatedArticleName($value)
    {
        $this->article->slug = Str::slug($value);
    }

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->id_zonagen = $article->id_zona;

        $this->id_zona = $article->id_zona;
        $this->id_dopp = $article->id_dopp;
        $this->departments = Department::all();
        $this->department_id = $article->department->id;
        $this->department_id_sel = $article->department->id;

        $this->categories = Category::where('department_id', $this->department_id)->get();
        $this->units = Unit::all();
        $this->brands = Trademark::all();
    }

    public function save()
    {
        // $rules= $this->rules;
        // $this->validate($rules);

        $this->validate();

        $this->article->save();
        $this->id_zonagen = $this->article->id_zona;
        $this->emit('saved');
    }

    public function deleteImage(Image $image)
    {
      
        Storage::delete([$image->url]);
        $image->delete();
        $this->article = $this->article->fresh();
        
     

    }

    public function updatedDepartmentId($value)
    {
        $this->categories = Category::where('department_id', $value)->get();
        $this->article->category_id = '';
        $this->article->department_id = $value;
    }

    public function updatedCategoryId($value)
    {
        $this->subcategories = Category::where('department_id', $value)->get();
        $this->reset('subcategory_id');
        $this->department_id_sel = $value;

    }

    public function refreshArticle()
    {
        $this->article = $this->article->fresh();
   
    }

    public function delete()
    {
        // elimina todas las imagenes del articulo
        $image = $this->article->image;

        if ($image = $this->article->image) {
            Storage::delete($image->url);
            $image->delete();
        }

        $this->article->delete();
        return redirect()->route('admin.index');
    }

    public function render(Article $article)
    {
        $this->images = Image::where('imageable_id', $this->article->id)
            ->Where('imageable_type', 'App\Models\Article')
            ->get();
        $this->imagecontador = $this->images->count();
        // $this->imagecontador=$this->article->image->count();

        // $imagecontador = $this->imagecontador;
        $imagecontador = $this->images;
        // $imagecontador=100;
        return view('livewire.admin.edit-article', compact('imagecontador'))->layout('layouts.admin');
    }

    public function IDgenerate()
    {
        // Asumiendo que tienes acceso al department_id de alguna manera.
        // Si tienes el category_id, puedes derivar el department_id de ahí.

        $department_id = $this->department_id; // Asegúrate de definir este método.
        $department = Department::find($department_id);

        if (!$department) {
            // Maneja el caso en que el departamento no se encuentra
            throw new \Exception('Department not found');
        }

        $category_ids = $department->categories()->pluck('id');

        // Obtener el último número usado de id_zona de los artículos de las categorías de este departamento
        $lastUsedNumber =
            Article::whereIn('category_id', $category_ids)
                ->pluck('id_zona')
                ->map(function ($value) {
                    return ltrim(substr($value, -4), '0');
                })
                ->filter()
                ->sort()
                ->last() ?? 0;

        // Generar el siguiente número disponible
        $availableNumber = str_pad($lastUsedNumber + 1, 4, '0', STR_PAD_LEFT);

        // Generar el ID final
        $IDgenerate = 'MT-' . $department_id . $availableNumber;

        // Asignar el ID generado al artículo
        $this->article->id_zona = strtoupper($IDgenerate);

        return $IDgenerate;
    }

    // Ejemplo del método getDepartmentId()
    protected function getDepartmentId()
    {
        dd($this->department_id_sel);
        // Implementa este método según tu lógica para obtener el ID del departamento
        // Podría ser algo como $this->article->category->department_id
        return $this->department_id_sel;
    }

    public function usarID($value)
    {
        $this->article->id_zona = $this->id_zonagen;
    }
}

// openss
