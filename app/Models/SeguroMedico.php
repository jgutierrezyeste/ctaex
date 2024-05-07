<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeguroMedico extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='seguros_medicos';

    public function expedientes():HasMany
    {
        return $this->hasMany(ExpedienteDatoPersonal::class,'seguro_medico_id');
    }
}
