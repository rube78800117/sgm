<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries_detail extends Model
{
    use HasFactory;

    public function article(){
        return $this->hasOne('App\Models\Article');
    
    }
    
    public function batch_entrie(){
        return $this->belongsTo('App\Models\Batch_entrie');
    
    }


}
