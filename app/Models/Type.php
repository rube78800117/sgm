<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;


    public function article(){
        return $this->hasOne('App\Models\Article');
    
        }
}
