<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeguroDeceso extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='seguro_decesos';

    public function gestionsegurodecesos():BelongsTo
    {
        return $this->belongsTo(GestionSeguroDeceso::class,'gestion_seguro_deceso_id');
    }

    public function aseguradoras():BelongsTo
    {
        return $this->belongsTo(Aseguradora::class,'aseguradora_id');

    }

    public function carpetasdecesos():BelongsTo
    {
        return $this->belongsTo(CarpetaDeceso::class,'carpeta_deceso_id');
    }
}
