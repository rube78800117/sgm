<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_voucher extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    // relacion un tipo de vaucher puede estar en varias entradas de lotes
    public function batch_entries(){
        return $this->belongsToMany('App\Models\Batch_entrie');
    
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
        
    }
}
