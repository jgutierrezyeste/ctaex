<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Revision extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='revisiones';

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function regimenes():BelongsToMany
    {
        return $this->belongsToMany(Regimen::class,'regimenes_revisiones','revision_id','regimen_id');
    }

    public function iniciadorprocedimientos():BelongsTo
    {
        return $this->belongsTo(IniciadorProcedimiento::class,'iniciador_id');
    }

    public function autorizaciones():BelongsToMany
    {
        return $this->belongsToMany(Autorizacion::class,'autorizaciones_revisiones','revision_id','autorizacion_id');
    }
}
