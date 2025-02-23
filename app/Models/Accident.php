<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accident extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'accident_date',
        'description',
        'cost',
        'status',
        'notes',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
