<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpedienteRegimen extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='expedientes_regimenes';

    public function tiposregimenes():BelongsTo
    {
        return $this->belongsTo(TipoRegimen::class,'tipo_regimen_id');
    }
}
