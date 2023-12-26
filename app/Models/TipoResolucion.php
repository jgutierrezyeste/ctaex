<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TipoResolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipo_resolucion';

    public function resoluciones():BelongsToMany
    {
        return $this->belongsToMany(TipoResolucion::class,'resolucion_tipo_resolucion','tipo_resolucion_id','resolucion_id');
    }
}
