<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Declaracion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='declaraciones';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_declaracion','declaracion_id','expediente_id');
    }

    public function rendicionesanuales():BelongsToMany
    {
        return $this->belongsToMany(RendicionAnual::class,'rendiciones_anuales_declaraciones','declaracion_id','rendicion_anual_id');
    }
}
