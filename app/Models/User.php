<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'line_id',
        'state',
        'job_title_id',
        
  
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',

    ];

    public function articles(){
        return $this->belongsToMany('App\Models\Article');
    
    }
  

    // relacion uno a muchos un usuario puede tener varios lotes de entradas
    public function batch_entries(){
        return $this->hasMany('App\Models\Batch_entrie');
    
    }
    public function reviews(){
        return $this->belongToMany(Review::class);
        }
    public function Orders(){
        return $this->belongToMany(Order::class);
        }

    
    public function purchases(){
            return $this->hasMany(Purchase::class);
           
        }

        
    public function job_title(){
            return $this->hasOne(Job_title::class);
            
        }
            // campo que relaciona en la tabla line , campo de la tabla user que esta relacionada
        public function line(){
            return $this->hasOne(Line::class,'id','line_id');
            
        }

}
