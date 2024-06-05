<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Builder;

class ShowStation extends Component

{


    public $linename, $lineaselect, $warehouses_all, $warehouses_all2, $lines, $line, $stations, $stationname,$statname, $station, $estacion, $sel, $color,$estacionselect, $warehouses;


    public function updatedLineaselect(){
        $this->stations = Station::where('line_id', $this->lineaselect)->get();
        $this->sel = Line::find($this->lineaselect);
        $this->color = $this->sel->color;
        $this->linename = $this->sel->name;
        $this->limpiar();
  }



  public function updatedEstacionselect(){
    
    $this->warehouses = Warehouse::where('station_id', $this->estacionselect)->get();
    $this->stationname = Station::find($this->estacionselect);
    $this->statname = $this->stationname->name;
} 
    public function mount(Line $line, Station $station){


     
         $this->line = $line;
         $this->station = $station;
         $this->warehouses = [];
         $this->getStations();
     
        }
        public function getStations(){
            $this->lines = Line::where('id', 'LIKE', 1)->first()->get();
            $this->stations = Station::where('line_id',1)->get();
          
            // $this->warehouses_all = Line::join("stations", "stations.line_id", "=", "lines.id");
            // $this->warehouses_all2 = Station::join("warehouses", "warehouses.station_id", "=", "stations.id");
// ->join("warewouses", "warehouse.id", "=", "line_station.station_id")
// ->where("alumno_curso.id_curso", "=", $idCurso)
// ->select("*")
// ->get();    
// dd($this->warehouses_all->first()->stations()->first()->warehouses()->first() );
            
        } 
        // obten_color funcion para obtener colores para la primera carga 
        public function color($station_id){
            $this->sel = Line::find($this->station_id);
            $this->color = $this->sel->color;

        }
        public function limpiar(){
            $this->warehouses =[];
           
      
            }

    public function render()
    {
        // $stations=$this->line->stations;
        // $stationsQuery=Station::all();
        // $color= $this->color;
          
             return view('livewire.admin.show-station');
    }
}