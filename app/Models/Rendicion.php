<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rendicion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='rendiciones';

    public function rendicionesiniciales():HasOne
    {
        return $this->hasOne(RendicionInicial::class,'rendicion_id');
    }

    public function rendicionesanuales():HasOne
    {
        return $this->hasOne(RendicionAnual::class,'rendicion_id');
    }

    public function rendicionesfinales():HasOne
    {
        return $this->hasOne(RendicionFinal::class,'rendicion_id');
    }

    public function empleados():BelongsToMany
    {
        return $this->belongsToMany(Empleado::class,'rendiciones_empleados','rendicion_id','empleado_id');
    }
    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'expediente_id');
    }
}
