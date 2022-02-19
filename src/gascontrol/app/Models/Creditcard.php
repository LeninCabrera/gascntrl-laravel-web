<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Creditcard extends Model
{
    use HasFactory;

    protected $table='creditcard';

    protected $fillable = [
        'id',
        'bankingEntity',
        'logo'
    ];

    public static function Creditcards(){
        return DB::table('creditcard')
        ->select('creditcard.*')
        ->get();
    }
}
