<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return $this->belongsTo(TsAsignado::class,'tsasignado_id');
    }

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

    
    public function procedimientosjudiciales():BelongsTo
    {
        return $this->belongsTo(ProcedimientoJudicial::class,'procedimientojudicial_id'); 
    }

    public function regimenes():BelongsToMany
    {
        return $this->belongsToMany(Regimen::class,'expediente_regimen','expediente_id','regimen_id');
    }

    public function declaraciones():BelongsToMany
    {
        return $this->belongsToMany(Declaracion::class,'expediente_declaracion','expediente_id','declaracion_id');
    }

    public function resoluciones():BelongsToMany
    {
        return $this->belongsToMany(Resolucion::class,'expediente_resolucion','expediente_id','resolucion_id');
    }

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    public function entidadesbancarias():BelongsToMany
    {
        return $this->belongsToMany(EntidadBancaria::class,'expediente_entidad_bancaria','expediente_id','entidad_bancaria_id');
    }

    public function pensiones():BelongsToMany
    {
        return $this->belongsToMany(Pension::class,'expediente_pension','expediente_id','pension_id');
    }

    public function empleados():BelongsToMany
    {
        return $this->belongsToMany(Empleado::class,'expediente_empleado','expediente_id','empleado_id');
    }

    public function administraciones():HasOne
    {
        return $this->hasOne(AdministracionBien::class,'expediente_id');
    }

    public function residencias():BelongsTo
    {
        return $this->belongsTo(Residencia::class,'residencia_id');
    }

    public function discapacidades():HasOne
    {
        return $this->hasOne(DiscapacidadExpediente::class,'expediente_id');
    }

    public function dependencias():HasOne
    {
        return $this->hasOne(DependenciaExpediente::class,'expediente_id');
    }

    public function prestaciones():BelongsToMany
    {
        return $this->belongsToMany(Prestacion::class,'expediente_prestacion','expediente_id','prestacion_id'); 
    }

    public function polizasdecesos():BelongsTo
    {
        return $this->belongsTo(PolizasDeceso::class,'poliza_id');
    }

    public function patologiasconcretas():BelongsToMany
    {
        return $this->belongsToMany(PatologiaConcreta::class,'expediente_patologia_concreta','expediente_id','patologia_concreta_id');
    }
    
}
