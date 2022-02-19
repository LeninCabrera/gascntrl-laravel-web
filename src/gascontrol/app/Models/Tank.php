<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Tank extends Model
{
    use HasFactory;

    protected $table = 'tank';

    protected $fillable = [
        'id',
        'description',
        'capacity',
        'existence',
        'iddetailproductbuys'
    ];

    public static function Tanks(){
        return DB::table('tank')
        ->select('tank.*')
        ->get();
    }
}
