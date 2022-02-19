<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCard',
        'name',
        'lastName',
        'direction',
        'email',
        'cellphoneTigo',
        'cellphoneClaro',
        'job',
        'salary'
    ];

    public static function Personals(){
        return DB::table('personal')
        ->select('personal.*')
        ->get();
    }
}
