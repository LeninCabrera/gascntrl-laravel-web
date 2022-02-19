<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Hose extends Model
{
    use HasFactory;

    protected $table = 'hose';

    protected $fillable = [
        'id',
        'name',
        'description',
        'iddispenser',
        'idtank'
    ];

    public static function Hoses(){
        return DB::table()
        ->select('hose.*')
        ->get();
    }
}
