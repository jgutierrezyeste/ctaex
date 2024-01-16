<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CodigoPostal extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='codigos_postales';

    public function localidades():BelongsToMany
    {
        return $this->belongsToMany(Localidad::class,'localidades_codigos_postales','codigo_postal_id','localidad_id');
    }

    public function centros():HasMany
    {
        return $this->hasMany(Centro::class,'codigo_postal_id');
    }

    public function domicilios():HasMany
    {
        return $this->hasMany(Domicilio::class,'codigo_postal_id');
    }

}
