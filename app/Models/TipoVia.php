<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoVia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipos_via';

    public function representantes():HasMany
    {
        return $this->hasMany(Representante::class,'tipo_via_id');
    }

    public function centros():HasMany
    {
        return $this->hasMany(Centro::class,'tipo_via_id');
    }
}
