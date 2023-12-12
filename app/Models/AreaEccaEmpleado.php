<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AreaEccaEmpleado extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_area_ecca_empleado','area_ecca_empleado_id','expediente_id');
    }
}
