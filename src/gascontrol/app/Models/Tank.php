<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    use HasFactory;

    protected $table = 'tanks';

    protected $fillable = [
        'id',
        'description',
        'capacity',
        'existence',
        'fuel_id',
    ];
}
