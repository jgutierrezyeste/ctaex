<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AutorizacionRevision extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='autorizaciones_revisiones';

    public function opcionesautorizacion():BelongsTo
    {
        return $this->belongsTo(OpcionAutorizacion::class,'opcion_autorizacion_id');
    }

}
