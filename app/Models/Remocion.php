<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Remocion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='remociones';

    

    public function representantes():BelongsToMany
    {
        return $this->belongsToMany(Representante::class,'representantes_remocion','remocion_id','representante_id')->withPivot('relacion_id');
    }



    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

}
