<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    public function purchase(){
        return $this->belongsTo(Purchase::class);
        
    }
    public function article(){
        return $this->belongsTo(Article::class);
        
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
        
    }
}
