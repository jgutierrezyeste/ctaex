<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Resolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='resoluciones';

    public function procedimientosresoluciones():BelongsTo
    {
        return $this->belongsTo(ProcedimientoResolucion::class,'procedimiento_resolucion_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Resolucion::class,'expediente_id');
    }

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    public function tipos_resoluciones():BelongsToMany
    {
        return $this->belongsToMany(TipoResolucion::class,'resolucion_tipo_resolucion','resolucion_id','tipo_resolucion_id');
    }
}
