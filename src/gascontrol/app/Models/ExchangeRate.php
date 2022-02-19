<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ExchangeRate extends Model
{
    use HasFactory;

    protected $table = 'exchangerate';

    protected $fillable = [
        'id',
        'dollarChange',
        'euroChange'
    ];

    public static function ExchangeRate(){
        return BD::table('exchangerate')
        ->select('exchangerate.*');
    }
}
