<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['reason', 'status', 'status']; // propiedad de resguardo por 

    const PROGRESO = 1;
    const ABIERTO = 2;
    const REVISION = 3;
    const APROBADO = 4;
    const RECHAZADO = 5;
    const ANULADO = 6;
    const SALIDA = 11;
    const MOVIMIENTO_ENTRE_ALMACENES = 22;
    const CERRADO = 33;






    public function counts_details()
    {
        return $this->hasMany(CountDetail::class);
    }


    public function line()
    {
        return $this->belongsTo(Line::class);
    }
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
