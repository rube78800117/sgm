<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;

class Order extends Model
{
  public $timestamps = true;
  protected $fillable = ['reason', 'status', 'movement_type', 'destiny_mov_warehouse_id']; // propiedad de resguardo por 
  use HasFactory;
  const PENDIENTE = 1;
  const ENVIADO = 2;
  const REVISION = 3;
  const APROBADO = 4;
  const RECHAZADO = 5;
  const ANULADO = 6;
  
  const SALIDA = 0;
  const MOVIMIENTO_ENTRE_ALMACENES = 7;

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function warehouse()
  {
      return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id');
  }





  public function warehouseDestiny()
  {
      return $this->belongsTo(Warehouse::class, 'destiny_mov_warehouse_id', 'id');
  }

  public function station()
  {
      return $this->hasOneThrough(Station::class, Warehouse::class, 'destiny_mov_warehouse_id', 'id', 'destiny_mov_warehouse_id', 'station_id');
  }

  public function line()
  {
      return $this->hasOneThrough(Line::class, Station::class, 'id', 'id', 'destiny_mov_warehouse_id', 'line_id');
  }

  // Accesor para obtener el nombre de la línea
  public function getLineNameAttribute()
  {
      return $this->line ? $this->line->name : null;
  }

  // Accesor para obtener otro atributo de la línea
  public function getLineDescriptionAttribute()
  {
      return $this->line ? $this->line->description : null;
  }












  // Accesor para obtener el nombre de la línea
  public function getLineColorAttribute()
  {
      return $this->line ? $this->line->color : null;
  }


  public function getWarehouseNameAttribute()
  {
      return $this->warehouse_destiny ? $this->warehouse_destiny->name : null;
  }
  


}
