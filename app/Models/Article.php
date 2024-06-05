<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use Spatie\Permission\Models\Role;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $withCount = ['reviews', 'warehouses'];
    public $timestamps = false;

    // Accesor Stock
    // public function getStockAttribute()
    // {
    //     return ArticleWarehouse::whereHas('article', function (Builder $query) {
    //         $query->where('id', $this->id);
    //     })->sum('quantity');

    // }

    // prueba estock por zona
    public function getStockAttribute()
    {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            return ArticleWarehouse::whereHas('article', function (Builder $query) {
                $query->where('id', $this->id);
            })->sum('quantity');
        } else {
            $userLineId = auth()->user()->line_id;

            // Obtener la zona de la línea del usuario autenticado
            $zoneId = Line::where('id', $userLineId)->value('zone_id');

            return ArticleWarehouse::whereHas('article', function (Builder $query) {
                $query->where('id', $this->id);
            })
                ->whereHas('warehouse.station.line.zone', function (Builder $query) use ($zoneId) {
                    $query->where('id', $zoneId);
                })
                ->sum('quantity');
        }
    }

    public function getDepartmentAttribute()
    {
        return $this->category->department;
    }
    // Accesor

    public function getRequiredAttribute()
    {
        return ArticleWarehouse::whereHas('article', function (Builder $query) {
            $query->where('id', $this->id);
        })->sum('accumulated_request');
    }
    // Relacion uno a uno polimorfica

    //  public function getRatingAttribute(){
    //    return $this->review;
    //  }

    // No funciono esta sintaxis
    // public function image(){
    //     return $this->morphOne('App/Models/Image','imageable');
    // } en su lugar la siguiente :
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function existences()
    {
        return $this->hasMany(Existence::class);
    }
    // relacion muchos a mucho para tabla de existencias por almacenes
    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class)
            ->withPivot('quantity', 'id', 'accumulated_request', 'created_at', 'updated_at','location_id', 'control_date' )
            ->orderBy('accumulated_request', 'desc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function trademark()
    {
        return $this->belongsTo(Trademark::class);
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    // relacion uno a muchos un articulo esta en varias entradas

    public function entries_detail()
    {
        return $this->hasMany('App\Models\Entries_detail');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    // public function department()
    // {
    //     return $this->hasOneThrough(Department::class, Category::class);
    // }

    public function purchase_details()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    // Relación roles en el modelo User
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'article_warehouse')
                    ->withPivot('location_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    


    public function warehousesLocation()
    {
        return $this->belongsToMany(Warehouse::class, 'article_warehouse')
                    ->withPivot('location_id');
    }


}
