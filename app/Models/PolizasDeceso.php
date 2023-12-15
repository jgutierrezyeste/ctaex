<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PolizasDeceso extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():HasOne
    {
        return $this->hasOne(Expediente::class,'poliza_id');
    }

    public function carpetas():BelongsTo
    {
        return $this->belongsTo(CarpetaDeceso::class,'carpeta_id');
    }

    public function aseguradoras():BelongsTo
    {
        return $this->belongsTo(Aseguradora::class,'aseguradora_id');
    }
}
