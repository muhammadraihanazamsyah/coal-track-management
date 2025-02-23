<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'model',
        'name',
        'fuel_capacity',
        'last_service_date',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    
    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function accidents()
    {
        return $this->hasMany(Accident::class);
    }
}
