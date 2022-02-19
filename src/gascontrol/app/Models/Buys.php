<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Buys extends Model
{
    use HasFactory;

    protected $table = 'buy';

    protected $fillable = [
        'id',
        'datebuys',
        'marchamos',
        'invoiceNumber',
        'turn',
        'idprovider'
    ];
}
