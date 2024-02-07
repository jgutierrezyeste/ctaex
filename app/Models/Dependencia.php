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

    public function serviciodependencias():BelongsTo
    {
        return $this->belongsTo(DependenciaServicio::class,'dependenciaservicio_id');
    }

    public function serviciodependenciassubtipo():BelongsTo
    {
        return $this->belongsTo(DependenciaServicioSubtipo::class,'dependenciaserviciosubtipo_id');
    
    }

    public function prestacionesdependencias():BelongsTo
    {
        return $this->belongsTo(PrestacionDependencia::class,'prestaciondependencia_id');
    }

    public function gradosdependencias():BelongsTo
    {
        return $this->belongsTo(GradoDependencia::class,'gradodependencia_id');
    }

    public function nivelesdependencias():BelongsTo
    {
        return $this->belongsTo(NivelDependencia::class,'niveldependencia_id');
    }
    
}
