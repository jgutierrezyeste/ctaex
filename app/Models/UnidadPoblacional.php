<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnidadPoblacional extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='unidades_poblacionales';

    public function provincias():BelongsTo
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }

    
    public function codigos_postales():BelongsToMany
    {
        return $this->belongsToMany(CodigoPostal::class,'unidades_poblacionales_codigos_postales','unidad_poblacional_id','codigo_postal_id');
    }

    public function municipios():BelongsTo
    {
        return $this->belongsTo(Municipio::class,'municipio_id');
    }
}
