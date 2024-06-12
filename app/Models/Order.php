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

  public function line()
  {
    return $this->belongsTo(Line::class);
  }
}
