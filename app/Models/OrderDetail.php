<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;


    public function order(){
        return $this->belongsTo(Order::class);
        
    }
    public function article(){
        return $this->belongsTo(Article::class);
        
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
        
    }
}
