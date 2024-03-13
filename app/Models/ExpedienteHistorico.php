<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpedienteHistorico extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='historico_expediente';

    

    public function tiposregimen():BelongsTo
    {
        return $this->belongsTo(TipoRegimen::class,'tipo_regimen_id');
    }
}
