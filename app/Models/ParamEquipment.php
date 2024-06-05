<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParamEquipment extends Model
{
    use HasFactory;
    
    protected $fillable = ['type', 'name', 'description'];

    public function system()
    {
        return $this->belongsTo(ParamEquipment::class, 'system_id')->where('type', 'system');
    }

    public function subsystems()
    {
        return $this->hasMany(ParamEquipment::class, 'subsystem_id')->where('type', 'subsystem');
    }

    public function equipment()
    {
        return $this->belongsTo(ParamEquipment::class, 'equipment_id')->where('type', 'equipment');
    }
}
