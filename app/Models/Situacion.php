<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Situacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='situaciones';

    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'situacion_id');
    }
}
