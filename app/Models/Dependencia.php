<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dependencia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='dependencias';

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function prestaciondependenciaservicios():BelongsTo
    {
        return $this->belongsTo(PrestacionDependenciaServicio::class,'prestacion_dependencia_servicio_id');
    }

    public function prestaciondependenciaeconomicas():BelongsTo
    {
        return $this->belongsTo(PrestacionDependenciaEconomica::class,'prestacion_dependencia_economica_id');
    
    }

    public function prestacionesdependencias():BelongsTo
    {
        return $this->belongsTo(PrestacionDependencia::class,'prestaciondependencia_id');
    }

    public function gradosdependencias():BelongsTo
    {
        return $this->belongsTo(GradoDependencia::class,'grado_id');
    }

    public function nivelesdependencias():BelongsTo
    {
        return $this->belongsTo(NivelDependencia::class,'nivel_id');
    }
    
}
