<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpedienteEntidadBancaria extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='expediente_entidad_bancaria';

    /*public function entidades_bancarias():BelongsTo
    {
        return $this->belongsTo(EntidadBancaria::class,'entidad_bancaria_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }*/
}
