<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrestacionDependenciaServicio extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='prestacion_dependencias_servicios';
   /* public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'dependenciaservicio_id');
    }*/

    public function dependencias():HasMany
    {
        return $this->hasMany(Dependencia::class,'prestacion_dependencia_servicio_id');
    }
}