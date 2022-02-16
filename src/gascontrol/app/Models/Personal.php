<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'DNI',
        'Nombre',
        'Direccion',
        'TelefonoConvencional',
        'FAX',
        'Movistar',
        'Claro',
        'OtroNumero',
        'Cargo',
        'Salario'
    ];
}
