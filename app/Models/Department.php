<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;
// use App\Models\Department;

class Department extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $filable =['name', 'slug'];
    public $timestamps = false;
    
    public function categories(){
        return $this->hasMany(Category::class);
    
        }
    // Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function articles()
    {
        return $this->hasManyThrough(Article::class, Category::class);
    }
// urla amigable
    public function getRouteKeyName(){
    return 'slug';
        }



}
