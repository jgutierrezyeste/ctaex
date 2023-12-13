<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalidaProfesional extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function profesionales():BelongsTo
    {
        return $this->belongsTo(Profesional::class,'profesional_id');
    }

    
    public function puestos():BelongsTo
    {
        return $this->belongsTo(Puesto::class,'puesto_id');
    }
}
