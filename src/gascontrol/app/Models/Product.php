<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'id',
        'type',
        'code'
    ];

    public static function Products(){
        return DB::table('product')
        ->select('product.*')
        ->get();
    }
}
