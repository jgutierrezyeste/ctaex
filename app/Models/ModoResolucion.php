<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ModoResolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='modos_resolucion';

    public function resoluciones():HasMany
    {
        return $this->hasMany(Resolucion::class,'modo_resolucion_id');
    }
}
