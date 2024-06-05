<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    public $timestamps = false;

    public function sector()
    {
       return $this->belongsTo(Sector::class);
    }

    public function articles()
    {
       return $this->belongsToMany(Article::class, 'article_warehouse', 'location_id', 'article_id');
    }

}
