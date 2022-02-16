<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable =[
        'NombreCompleto',
        'Direccion',
        'Contacto',
        'TelefonoConvencional',
        'FAX',
        'CelularMovistar',
        'CelularClaro',
        'OtroNumero',
        'CorreoElectronico',
        'DescuentoLitro',
        'MaximoDescuento'
    ];
}
