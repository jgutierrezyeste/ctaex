<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Resolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='resoluciones';

    public function figuras():BelongsTo
    {
        return $this->belongsTo(Figura::class,'figura_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Resolucion::class,'expediente_id');
    }

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    public function modos_resoluciones():BelongsTo
    {
        return $this->belongsTo(ModoResolucion::class,'modo_resolucion_id');
    }
}
