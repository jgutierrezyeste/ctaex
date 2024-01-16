<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoResolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipo_resolucion';

   

    

    public function resoluciones():HasMany
    {
        return $this->hasMany(Resolucion::class,'tipo_resolucion_id');
    }
}
