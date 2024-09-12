<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EntidadBancaria extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_entidad_bancaria','entidad_bancaria_id','expediente_id')->withPivot('codigo_iban','entidad_financiera','oficina','digito_control','numero_cuenta');
    }

    
}
