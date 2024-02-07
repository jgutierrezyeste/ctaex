<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Figura extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function restituciones():HasMany
    {
        return $this->hasMany(Restitucion::class,'figura_id');
    }

    public function resoluciones():HasMany
    {
        return $this->hasMany(Resolucion::class,'figura_id');
    }
}
