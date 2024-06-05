<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Article;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
class CategoryFilter extends Component
{
     use WithPagination;
     public $department, $categoria;
     public $categories;
    
      public function updatedCategoria(){
            $this->resetPage();

      }

     public function limpiar(){

      $this->reset(['categoria','page']);

      }

    public function render()
      {
      
           

            $articlesQuery = Article::query()->whereHas('category.department', function(Builder $query){
                                $query->where('id', $this->department->id);
                                });
                  
            if ($this->categoria){
                  $articlesQuery = $articlesQuery->whereHas('category', function(Builder $query){
                        $query->where('name', $this->categoria);

                  });
            }
            $articles =$articlesQuery->paginate(8);
            return view('livewire.category-filter' , compact('articles')); 
  
      }


     
}
