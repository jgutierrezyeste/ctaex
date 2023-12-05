<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expediente extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function situacions():BelongsTo
    {
        return $this->belongsTo(Situacion::class,'situacion_id');
    }

    public function tsasignado():BelongsTo
    {
        return $this->belongsTo(TsAsignado::class);
    }

    public function regimens():BelongsTo
    {
        return $this->belongsTo(Regimen::class,'regimen_id');
    }

    

    public function sexos():BelongsTo
    {
        return $this->belongsTo(Sexo::class,'sexo_id');
    }

    public function nacionalidads():BelongsTo
    {
        return $this->belongsTo(Nacionalidad::class,'nacionalidad_id');
    }

    public function tipodocumentos():BelongsTo
    {
        return $this->belongsTo(DocumentoIdentificativo::class,'documentoidentificativo_id');
    }

    public function sanitarios():BelongsTo
    {
        return $this->belongsTo(Sanitario::class,'sanitario_id');
    }

    public function patologiasgenerales():BelongsTo
    {
        return $this->belongsTo(PatologiaGeneral::class,'patologiageneral_id');
    }

    public function centros():BelongsTo
    {
        return $this->belongsTo(Centro::class,'centro_id');
    }

    public function declaraciones():BelongsTo
    {
        return $this->belongsTo(Declaracion::class,'declaracion_id');
    }

    public function resoluciones():BelongsTo
    {
        return $this->belongsTo(Resolucion::class,'resolucion_id');
    }
}
