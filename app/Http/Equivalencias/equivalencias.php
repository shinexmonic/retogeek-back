<?php

namespace App\Http\Equivalencias;

class equivalencias
{    
    private static $estados = [
        'pendiente'  => 1,
        'completa'   => 2,
        'incompleta' => 3,
    ];

    public static function estados()
    {
        return self::$estados;
    }
}
