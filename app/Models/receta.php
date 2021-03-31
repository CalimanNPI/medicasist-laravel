<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;
    protected $fillable = [
        'diagnostico',
        'fecha_expedido',
        'fecha_vencimiento',
        'observaciones',
        'cita_id',
    ];

    protected $primaryKey = 'folio';

}
