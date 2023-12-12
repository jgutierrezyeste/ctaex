<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EntidadBancaria extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_entidad_bancaria','entidad_bancaria_id','expediente_id');
    }
}
