<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{
    use HasFactory;

    protected $table='customer';

    protected $fillable =[
        'idCard',
        'name',
        'lastName',
        'direction',
        'cellphoneClaro',
        'cellphoneTigo',
        'email'
    ];

    public static function Customers(){
        return DB::table('customer')
        ->select('customer.*')
        ->get();
    }

}
