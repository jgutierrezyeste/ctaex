<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrestacionDependenciaEconomica extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='prestacion_dependencias_economicas';
    /*public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'dependenciaserviciosubtipo_id');
    }*/

    public function dependencias():HasMany
    {
        return $this->hasMany(Dependencia::class,'prestacion_dependencia_economica_id');
    }
}
