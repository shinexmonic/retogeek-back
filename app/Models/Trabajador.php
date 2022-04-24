<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table = 'trabajadores';
    protected $fillable = ['nombres','apellidos','id_cargo','edad','id_dependencia'];
}
