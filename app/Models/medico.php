<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;

    protected $fillable =[
        'cedula_No',
        'especialidad',
        'user_id',
        'lugar_especializacion',
        'cedula_path',
        'descripcion',
    ];

    protected $primaryKey = 'medico_id';
}
