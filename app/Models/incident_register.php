<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incident_register extends Model
{
    use HasFactory;
    protected  $table = 'incident_register';
    protected $fillable = [
        'incident_id',
        'rev',
        'station',
        'incident_no',
        'incident_date',
        'incident_time',
        'incident_class',
        'incident_level',
        'incident_subject',
       
    ];

}
