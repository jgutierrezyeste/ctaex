<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RendicionAnualDeclaracion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='rendiciones_anuales_declaraciones';

    public function tipos_rendiciones_anuales():BelongsTo
    { 
        return $this->belongsTo(TipoRendicionAnual::class,'tipo_id');
    }

    /*public function rendicionesanuales():BelongsTo
    {
        return $this->belongsTo(RendicionAnual::class,'rendicion_anual_id');
    }*/

    /*public function declaraciones():BelongsToMany
    {
        return $this->belongsToMany(Declaracion::class,'rendiciones_anuales_declaraciones','rendicion_anual_id','declaracion_id');
    }*/

}
