<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoRegimen extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipos_regimen';

    public function expedienteshistoricos():HasMany
    {
        return $this->hasMany(ExpedienteHistorico::class,'tipo_regimen_id');
    }


}
