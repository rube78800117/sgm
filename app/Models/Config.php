<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Config;
use App\Models\Catalogo;
class Config extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['activ_register']; // propiedad de resguardo por 
   use HasFactory;
   const Activo = 1;
   const Inactivo = 0;


   



  
}
