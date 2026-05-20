<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BienInmueble extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='bienes_inmuebles';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_bienes_inmuebles','inmueble_id','expediente_id');
    }

    public function tipoinmuebles():BelongsTo
    {
        return $this->belongsTo(TipoInmueble::class,'tipo_id');
    }
}
