<?php


namespace App\Http\Livewire\Mycomponents;
use Illuminate\Support\Collection;
use App\Models\Vendor;
use App\Models\Article;
use Livewire\Component;


class Selectvendor extends Component
{
    
    
    public string $searchText = '';
    public Collection $items;
    public array $selectedIds = [];
    public string $name;
    public string $model;
    public string $label;
    public  $name2;

    public function fetch()
    {
        $this->items = Vendor::where('name', 'LIKE','%'.$this->searchText.'%')->whereNotIn('id', $this->selectedIds)->limit(10)->get();
      
 
        return Vendor::query()->whereIn('id', $this->selectedIds)->get();
        
    }

    public function choose($id){
        $this->selectedIds = []; // borra la matriz para permitir una sola eleccion
        $this->selectedIds[] = $id; // adiciona elementos a la matriz
        //$this->searchText = $name2;   // actualiza el  valor del input con  el valor seleccionado
   
        
    }

    public function remove($id)
    {
        $this->selectedIds = array_filter($this->selectedIds, function ($el) use ($id) {
            return $el !== $id;
        });
    }

    public function render()
    {
        return view('livewire.mycomponents.selectvendor', [
            'selectedItems' => $this->fetch()
        ]);
    }
    
    
    
    
    
   
}
