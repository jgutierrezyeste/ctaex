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

    

   
    public function aseguradoras():BelongsTo
    {
        return $this->belongsTo(Aseguradora::class,'aseguradora_id'); 
    }

    public function gradosdependencias():BelongsTo
    {
        return $this->belongsTo(GradoDependencia::class,'gradodependencia_id'); 
    }

    public function serviciosdependencias():BelongsTo
    {
        return $this->belongsTo(DependenciaServicio::class,'dependenciaservicio_id'); 
    }

    public function subtiposerviciosdependencias():BelongsTo
    {
        return $this->belongsTo(DependenciaServicioSubtipo::class,'dependenciaserviciosubtipo_id'); 
    }

    public function prestacionesdependencias():BelongsTo
    {
        return $this->belongsTo(PrestacionDependencia::class,'prestaciondependencia_id'); 
    }

    public function nivelesdependencias():BelongsTo
    {
        return $this->belongsTo(NivelDependencia::class,'niveldependencia_id'); 
    }
    public function procedimientosjudiciales():BelongsTo
    {
        return $this->belongsTo(ProcedimientoJudicial::class,'procedimientojudicial_id'); 
    }
}
