<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RendicionAnual extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='rendiciones_anuales';

    
    public function rendiciones():BelongsTo
    {
        return $this->belongsTo(Rendicion::class,'rendicion_id');
    }

    public function declaraciones():BelongsToMany
    {
        return $this->belongsToMany(Declaracion::class,'rendiciones_anuales_declaraciones','rendicion_anual_id','declaracion_id')->withPivot('tipo_id');
    }

    /*public function rendicionesanualesdeclaracion():HasMany
    {
        return $this->hasMany(RendicionAnualDeclaracion::class,'rendicion_anual_id');
    }*/
}
