<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = 
    ['nombre_est','numero_identificacion','edad','nombre_padre','nombre_madre','nombre_acudiente','telefono_contacto','telefono_acudiente','grado_cursa'];
}
