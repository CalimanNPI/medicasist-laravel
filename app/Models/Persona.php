<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'email',
        'foto',
        'fecha_naci',
        'alergia',
        'enfermedades',
        'peso',
        'estatura',
        'temperatura',
        'presion',
        'estado_civil',
        'ocupacion',
        'nombre_responsable',
        'parentesco',
        'direccion',
        'tel_1',
        'tel_2',
        'observaciones',
    ];

    protected $primaryKey = 'paciente_id';
}
