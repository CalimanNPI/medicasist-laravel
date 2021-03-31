<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
    use HasFactory;

        
    protected $fillable =[
        'medicamento',
        'indicaciones',
        'receta_folio',
    ];

    protected $primaryKey = 'id_medicamento';
}
