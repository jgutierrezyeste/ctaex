<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DefensaJudicial extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='defensas_judiciales';

    public function letrados():BelongsTo
    {
        return $this->belongsTo(Letrado::class,'letrado_id');
    }

    
    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    
    public function motivos():BelongsTo
    {
        return $this->belongsTo(Motivo::class,'motivo_id');
    }

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    public function estados():BelongsTo
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }
}
