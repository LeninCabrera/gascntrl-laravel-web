<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Coupon extends Model
{
    use HasFactory;

    protected $table='coupon';

    protected $fillable = [
        'id',
        'type',
        'name',
        'typeValue',
        'value',
        'unitMeasure'
    ];

    public static function Coupons(){
        return DB::table('coupon')
        ->select('cuopon.*')
        ->get();
    }
}
