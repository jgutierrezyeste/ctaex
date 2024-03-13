<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regimen extends Model
{
    use HasFactory;
    protected $table='regimenes';
    protected $guarded=[];
    //protected $primarkey='alcance';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'historico_expediente','regimen_id','expediente_id');
    }

    /*public function remociones():HasMany
    {
        return $this->hasMany(Remocion::class,'regimen_id');
    }*/

    /*public function reintegros():HasMany
    {
        return $this->hasMany(Reintegro::class,'regimen_id');
    }*/

    public function fallecidos():HasMany
    {
        return $this->hasMany(Fallecido::class,'regimen_id');
    }


    public function expedienteshistoricios():HasMany
    {
        return $this->hasMany(ExpedienteHistorico::class,'regimen_id');
    }
}
