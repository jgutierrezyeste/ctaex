<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RendicionAnualDeclaracion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='rendiciones_anuales_declaraciones';

    public function tipos_rendiciones_anuales():BelongsTo
    { 
        return $this->belongsTo(TipoRendicionAnual::class,'tipo_id');
    }
}
