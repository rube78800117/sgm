<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Livewire\Admin\Purchase;
use App\Http\Livewire\Admin\User;
use App\Models\Purchase as ModelsPurchase;

class Line extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = true;

    public function stations()
    {
        return $this->hasMany('App\Models\Station');
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function zone(){
        return $this->belongsTo('App\Models\Zone');
    }
    
    //    public function users() {
    //     return $this->hasMany(User::class);
    // }

}
