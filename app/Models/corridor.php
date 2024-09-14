<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corridor extends Model
{
    use HasFactory;
    protected  $table = 'corridor';
    protected $fillable = [
        'corridor_id',
        'name',
        'phase',
    ];
}
