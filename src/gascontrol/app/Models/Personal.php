<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_Card', 'name', 'last_Name','address',
        'cellphone', 'email', 'job_Position', 'salary'
    ];
}
