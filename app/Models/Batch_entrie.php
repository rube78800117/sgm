<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_entrie extends Model
{
    use HasFactory;

    public function entries_detail(){
        return $this->hasMany('App\Models\Entries_detail');
    
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    
    }

    // Relacion una entrada pertenece a un solo proveedor
    public function vendor(){
        return $this->hasOne('App\Models\Vendor');
    
    }

    // Relacion entre el tipo de comprobante y el lote
    // un lote de entrada tiene un solo tipo de vaucher
    public function type_voucher(){
        return $this->hasOne('App\Models\Type_voucher');
    
    }
}
