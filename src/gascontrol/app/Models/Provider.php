<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'provider';

    protected $fillable = [
        'id',
        'companyName',
        'contactName',
        'seller',
        'rucNumber',
        'dgiRegistration',
        'direction',
        'town',
        'municipality',
        'country',
        'postalCode',
        'conventionalTelephone',
        'cellphone',
        'email',
        'otherEmail',
        'lineBussines',
        'category',
        'legalStatus',
        'description'
    ];

    public static function Providers(){
        return DB::table('provider')
        ->select('provider.*')
        ->get();
    }
}
