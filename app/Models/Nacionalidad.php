<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='nacionalidades';

    public function expedientes():HasMany
    {
        return $this->hasMany(ExpedienteDatoPersonal::class,'nacionalidad_id');
    }
}
