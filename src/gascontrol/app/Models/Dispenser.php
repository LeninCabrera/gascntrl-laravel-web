<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Dispenser extends Model
{
    use HasFactory;

    protected $table = 'dispenser';

    protected $fillable = [
        'id',
        'description',
    ];

    public static function Dispensers(){
        return DB::table('dispenser')
        ->select('dispenser.*')
        ->get();
    }
}


