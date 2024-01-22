<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function domicilios():HasMany
    {
        return $this->hasMany(Domicilio::class,'provincia_id');
    }

    public function centros():HasMany
    {
        return $this->hasMany(Centro::class,'provincia_id');
    }

    public function entidades():HasMany
    {
        return $this->hasMany(Entidad::class,'provincia_id');
    }

    public function municipios():HasMany
    {
        return $this->hasMany(Municipio::class,'provincia_id');
    }
}
