<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdministracionBien extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='administracion_bienes';

    public function motivoscancelacion():BelongsTo
    {
        return $this->belongsTo(Motivo::class,'motivo_cancelacion_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function estados():BelongsTo
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }
}
