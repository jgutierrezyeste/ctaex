<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Localidad extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='localidades';

    public function provincias():BelongsTo
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }

    
    public function codigos_postales():BelongsToMany
    {
        return $this->belongsToMany(CodigoPostal::class,'localidades_codigos_postales','localidad_id','codigo_postal_id');
    }
}
