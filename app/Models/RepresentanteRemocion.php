<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RepresentanteRemocion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='representantes_remocion';

    public function relaciones():BelongsTo
    {
        return $this->belongsTo(Relacion::class,'relacion_id');
    }
}
