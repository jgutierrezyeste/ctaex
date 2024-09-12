<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Relacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='relaciones';
    
    public function representantesremociones():HasMany
    {
        return $this->hasMany(RepresentanteRemocion::class,'relacion_id')->withPivot('relacion_id');
    }

    
}
