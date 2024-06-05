<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function Users(){
        return $this->belongsToMany(User::class);
        }
    public function article(){
        return $this->belongsTo(Article::class);

        }
                   
}
