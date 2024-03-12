<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GestionSeguroDeceso extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='gestion_seguros_decesos';

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function segurosdecesos():HasOne
    {
        return $this->hasOne(SeguroDeceso::class,'gestion_seguro_deceso_id');
    }

}
