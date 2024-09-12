<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Año extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='años';

    public function declaraciones():HasMany
    {
        return $this->hasMany(Declaracion::class,'año_id');
    }

    public function expedienteprestaciones():HasMany
    {
        return $this->hasMany(ExpedientePrestacion::class,'año_id');
    }
}
