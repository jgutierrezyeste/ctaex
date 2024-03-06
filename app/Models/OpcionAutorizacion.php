<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OpcionAutorizacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='opciones_autorizacion';

   

    public function autorizacionesrevision():HasMany
    {
        return $this->hasMany(AutorizacionRevision::class,'opcion_autorizacion_id');
    }

}
