<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Representante extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='representantes';

    public function remociones():BelongsToMany
    {
        return $this->belongsToMany(Remocion::class,'representantes_remocion','representante_id','remocion_id')->withPivot('relacion_id');
    }

    public function relaciones():BelongsTo
    {
        return $this->belongsTo(Relacion::class,'relacion_id');
    }
}
