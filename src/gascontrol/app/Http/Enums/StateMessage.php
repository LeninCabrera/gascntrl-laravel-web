<?php

namespace App\Http\Enums;

enum StateMessage: string
{
    case Info = 'info';
    case Error = 'error';
    case Success = 'success';
    case Warning = 'warning';

    static function sessionFlash(StateMessage $typeMessage, string $stringMessage)
    {
        session()->flash($typeMessage->value, $stringMessage); 
    }
}