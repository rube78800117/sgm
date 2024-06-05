<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;


    public function warehouse()
    {
            return $this->belongsTo(Warehouse::class);
    }

    public function locations()
    {
            return $this->hasMany(Location::class);
    }
  
}
