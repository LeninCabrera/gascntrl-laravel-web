<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProductBuys extends Model
{
    use HasFactory;

    protected $table = 'detailproductprovider';

    protected $fillable = [
        'id',
        'price',
        'amount',
        'totalPrice',
        'idbuy',
        'idproduct'
    ];

    public static function DetailsProductProviders(){
        return DB::table('detailproductprovider')
        ->select('detailproductprovider.*')
        ->get();
    }
}
