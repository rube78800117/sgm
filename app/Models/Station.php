<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;


    public function warehouses(){
        return $this->hasMany('App\Models\Warehouse');
    
        }
        public function line(){
            return $this->belongsTo('App\Models\Line');
        
            }

}
