<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProcedimientoResolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='procedimientos_resolucion';

   

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_dictado_id');
    }

    public function resoluciones():HasMany
    {
        return $this->hasMany(Resolucion::class,'procedimiento_resolucion_id');
    }
}
