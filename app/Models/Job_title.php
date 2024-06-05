<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_title extends Model
{
    use HasFactory;
    public function professions(){
        return $this->belongsToMany(Profession::class);
    
        }
}
