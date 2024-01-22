<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='municipios';

    public function entidades():HasMany
    {
        return $this->hasMany(Entidad::class,'municipio_id');
    }

    public function provincias():BelongsTo
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
}
