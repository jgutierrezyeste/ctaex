<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='resoluciones';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_declaracion','resolucion_id','expediente_id');
    }

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_dictado_id');
    }
}
