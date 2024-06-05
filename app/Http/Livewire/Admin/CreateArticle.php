<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Trademark;
use App\Models\Article;
use Illuminate\Support\Str;

class CreateArticle extends Component
{ 
    public $subcategories=[], $numerosfor=[];
    public $categories;
    // el modelo Department representa las categorias
    public $category_id="";
    public $subcategory_id="";

    public $name, $slug;
    public $id_eetc, $id_dopp, $id_zona, $IDgenerate;
    public $description;
    public $units, $unit_id = 1, $stock_min= 10;
    public $brands, $trademark_id=1, $brandselect= 1, $brand_id = 4;

    protected $rules = [
        'slug' => 'required',
        'subcategory_id' => 'required',
        'name' => 'required', 
        'slug'=>'required|unique:articles',
        // 'description' => 'required',
        // 'id_dopp' => 'required',
        // 'id_eetc' => 'required',
        'id_zona' => 'required_without_all:id_eetc,id_dopp',
        'unit_id' => 'required', 
        'stock_min' => 'required',
        'brandselect' => 'required',
       
    ];



    public function updatedCategoryId($value){
        $this->subcategories = Category::where('department_id', $value)->get();
        $this->reset('subcategory_id');
    }


  

    public function updatedName($value){
        $this->slug = Str::slug($value);
      
    }

    public function save(){

        $rules= $this->rules;
        $this->validate($rules);
        $article = new Article();
        $article->name = $this->name;
        $article->slug = $this->slug;
        $article->category_id = $this->subcategory_id;
        $article->department_id = $this->category_id;
        $article->description = $this->description;
        $article->stock_min = $this->stock_min;
        $article->trademark_id = $this->brandselect;
        $article->id_eetc = $this->id_eetc;
        $article->id_dopp = $this->id_dopp;
        $article->id_zona = $this->id_zona;
        $article->unit_id = $this->unit_id;
       
        $article->save();
       
        

        return redirect()->route('admin.articles.edit', $article);
        
    }
   
    Public function mount(){
        
        $this->categories = Department::all();
        $this->units = Unit::all();
        $this->brands = Trademark::all();
    }
    public function render()
    {
        return view('livewire.admin.create-article')->layout('layouts.admin');
    }

    public function IDgenerate()
    {
        if ($this->category_id !== "" && $this->category_id !== 0) {
            $usedNumbers = Article::where('department_id', $this->category_id)
                ->pluck('id_zona')
                ->map(function ($value) {
                    return ltrim(substr($value, -4), '0');
                })
                ->filter()
                ->sort()
                ->toArray();
    
            $availableNumber = collect(range(1, 9999))->diff($usedNumbers)->first();
    
            $IDgenerate = "MT-" . $this->category_id . str_pad($availableNumber, 4, "0", STR_PAD_LEFT);
            $this->id_zona = strtoupper($IDgenerate);
            
            return $IDgenerate;
        }
    }
}
