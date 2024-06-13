<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
        use HasFactory;

        protected $guarded = ['id'];
        public $timestamps = false;


        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }
        // public function station()
        // {
        //         return $this->belongsTo('App\Models\Station');
        // }

        public function existences()
        {
                return $this->hasMany(Existence::class);
        }


        public function articles()
        {
            return $this->belongsToMany(Article::class)
                        ->withPivot('stock', 'location_id')
                        ->withTimestamps();
        }






        // public function articles()
        // {
        //         return $this->belongsToMany(Article::class);
        // }

        public function purchase_details()
        {
                return $this->hasMany(PurchaseDetail::class);
        }
        public function sectors()
        {
                return $this->hasMany(Sector::class);
        }
        public function order_details()
        {
                return $this->hasMany(OrderDetail::class);
        }


        public function orders()
        {
            return $this->hasMany(Order::class, 'destiny_mov_warehouse_id', 'id');
        }
    
        public function station()
        {
            return $this->belongsTo(Station::class, 'station_id', 'id');
        }

}
