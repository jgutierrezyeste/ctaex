<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdministracionBien extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function motivos():BelongsTo
    {
        return $this->belongsTo(Motivo::class,'motivo_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }
}
