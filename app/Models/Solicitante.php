<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $table = "solicitante";
    protected $primaryKey="id";
    protected $fillable=['userid','nombre','apellido','dni','ocupacion','documento','fechanacimiento','contacto',
        'sexo','direccion'];
}
