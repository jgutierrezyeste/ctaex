<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Domicilio extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='domicilios';

    public function expedientes():HasOne
    {
        return $this->hasOne(Expediente::class,'domicilio_id');
    }

    public function provincias():BelongsTo
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
}
