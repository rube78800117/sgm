<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = true;

    public function purchase_details(){
        return $this->hasMany(PurchaseDetail::class);
        }

    public function line(){
        return $this->belongsTo(Line::class);
        }

    public function vendor(){
        return $this->belongsTo(Vendor::class);
        }

    public function user(){
        return $this->belongsTo(User::class);
        }

    public function type_voucher(){
        return $this->belongsTo(Type_voucher::class);
        }

    public function state(){
        return $this->belongsTo(State::class);
        }
        
   

}
