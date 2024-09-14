<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incident_register_entries extends Model
{
    use HasFactory;
    protected  $table = 'incident_register_entries';
    protected $fillable = [
        'incident_id',
        'time',
        'incident_details',
       
       
    ];
}
