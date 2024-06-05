<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountDetail extends Model
{
    use HasFactory;
    public function count(){
        return $this->belongsTo(Count::class);
        
    }
    public function article(){
        return $this->belongsTo(Article::class);
        
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
        
    }

    
}
