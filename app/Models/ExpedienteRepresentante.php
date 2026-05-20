<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpedienteRepresentante extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='expediente_representantes';

    public function relacion():BelongsTo
    {
        return $this->belongsTo(Relacion::class,'relacion_id');
    }
}
