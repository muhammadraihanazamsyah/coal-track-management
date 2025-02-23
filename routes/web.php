<?php

use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Vehicle::all();
});
