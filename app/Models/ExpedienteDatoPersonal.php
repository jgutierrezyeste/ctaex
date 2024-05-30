<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpedienteDatoPersonal extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='expediente_datos_personales';

    public function sexos():BelongsTo
    {
        return $this->belongsTo(Sexo::class,'sexo_id');
    }

    public function nacionalidades():BelongsTo
    {
        return $this->belongsTo(Nacionalidad::class,'nacionalidad_id');
    }

    public function tipodocumentos():BelongsTo
    {
        return $this->belongsTo(DocumentoIdentificativo::class,'documento_identificativo_id');
    }

    public function segurosmedicos():BelongsTo
    {
        return $this->belongsTo(SeguroMedico::class,'seguro_medico_id');
    }


    public function centros():BelongsTo
    {
        return $this->belongsTo(Centro::class,'centro_id');
    }

    
    public function aseguradoras():BelongsTo
    {
        return $this->belongsTo(Aseguradora::class,'aseguradora_id'); 
    }

    public function domicilios():BelongsTo
    {
        return $this->belongsTo(Domicilio::class,'domicilio_id');
    }

    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'expediente_datos_personales_id');
    }


}
