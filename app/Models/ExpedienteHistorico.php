<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpedienteHistorico extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='expediente_historico';

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function regimenes():BelongsTo
    {
        return $this->belongsTo(Regimen::class,'regimen_id');
    }

    public function tiposregimenes():BelongsTo
    {
        return $this->belongsTo(TipoRegimen::class,'tipo_regimen_id');
    }
}
