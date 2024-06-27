<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ArticleWarehouse;
use App\Models\Location;
use App\Models\Sector;
use App\Models\Warehouse;

class ChangeLocation extends Component
{
    public $open, $item, $warehouse, $articleWarehouse_id, $sectors, $locations, $selectedLocations;

    public function selectLocations($id)
    {
        $this->locations = Location::where('sector_id', $id)->get();
      
    }

    public function updatedSelectedLocations($value){

        ArticleWarehouse::where('id', $this->articleWarehouse_id)
            ->update(['location_id' => $value]);
        
        // $this->emitTo('mycomponents.location-article', 'prueba', $value);
    }

    public function mount(Warehouse $item)
    {
        $this->sectors = Sector::where('warehouse_id', $item->id)->get();

        // $this-> = $article->id_zona;

        // $this->id_zona = $article->id_zona;
        // $this->id_dopp = $article->id_dopp;
        // $this->departments = Department::all();
        // $this->department_id = $article->department->id;
        // $this->department_id_sel = $article->department->id;

        // $this->categories = Category::where('department_id', $this->department_id)->get();
        // $this->units = Unit::all();
        // $this->brands = Trademark::all();
    }
    public function render()
    {
        // Assuming you have an instance of the ArticleWarehouse model
        $articleWarehouse = ArticleWarehouse::find($this->articleWarehouse_id);

        return view('livewire.admin.change-location', compact('articleWarehouse'));
    }
}
