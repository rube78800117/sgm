<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'parent_id', 'code_item'];

    public function parent()
    {
        return $this->belongsTo(Parameter::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Parameter::class, 'parent_id');
    }
}
