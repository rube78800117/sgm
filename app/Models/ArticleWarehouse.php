<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleWarehouse extends Model
{
    use HasFactory;
    protected $table="article_warehouse";

    //relacion 1a muchos inversa

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);


    }
    public function article(){
        return $this->belongsTo(Article::class);
        

    }


  
  
}
