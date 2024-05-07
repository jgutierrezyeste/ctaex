<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Centro extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():HasMany
    {
        return $this->hasMany(ExpedienteDatoPersonal::class,'centro_id');
    }

    public function codigos_postales():BelongsTo
    {
        return $this->belongsTo(CodigoPostal::class,'codigo_postal_id');
    }

    public function provincias():BelongsTo
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
}
