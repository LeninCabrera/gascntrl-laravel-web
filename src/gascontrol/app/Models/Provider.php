<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName', 'seller', 'address', 'town', 'conventionalTelephone',
        'cellphone', 'rucNumber', 'dgiRegistration', 'lineBussiness'
    ];
}
