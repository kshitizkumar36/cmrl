<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manual extends Model
{
    use HasFactory;
    protected  $table = 'manual';
    protected $fillable = [
        'manual_id',
        'name',
       
    ];
}
