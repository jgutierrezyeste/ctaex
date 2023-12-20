<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Empleado extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='empleados';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_empleado','empleado_id','expediente_id');
    }

    public function rendiciones():BelongsToMany
    {
        return $this->belongsToMany(Rendicion::class,'rendiciones_empleados','empleado_id','rendicion_id');
    }
}
