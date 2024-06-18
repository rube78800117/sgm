<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    public function lines()
    {
        return $this->hasMany('App\Models\Line');
    }

    // public function lines()
    // {
    //     return $this->belongsToMany(Line::class, 'zone_line', 'zone_id', 'line_id');
    // }

    
}
