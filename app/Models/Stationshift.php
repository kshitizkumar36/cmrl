<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationshift extends Model
{
    use HasFactory;
    protected  $table = 'station_shift';
    protected $fillable = [
        'station_name',
        'shift',
        'designation',
        'from_',
        'to_'
    ];
}
