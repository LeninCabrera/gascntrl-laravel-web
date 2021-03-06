<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hose extends Model
{
    use HasFactory;

    protected $table = 'hoses';

    protected $fillable = [
        'id',
        'description',
        'dispenser_id',
        'tank_id'
    ];
}
