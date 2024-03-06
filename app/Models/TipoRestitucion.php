<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoRestitucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipo_restitucion';

    public function restituciones():HasMany
    {
        return $this->hasMany(Restitucion::class,'tipo_restitucion_id');
    }
}
