<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
     
    protected $fillable =[
        'motivo',
        'fecha_programada',
        'hora_programada',
        'planta',
        'num_cama',
        'observaciones',
        'medico_id',
        'paciente_id',
    ];

    protected $primaryKey = 'cita_id';
}
