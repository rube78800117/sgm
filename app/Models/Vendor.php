<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // relacion un proveedor puede tener muchas entradas

    public function batch_entries(){
    return $this->belongsToMany('App\Models\Batch_entrie');
    
    }
    public function purchases(){
        return $this->hasMany(Purchase::class);
        
    }

}

