<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Existence extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relacion uno a uno inversa
    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    
        }
        
    public function article(){
        return $this->belongsTo(Article::class);
    }

    
}
