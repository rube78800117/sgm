<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Task extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'frequency', 'type_task'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

  
}
