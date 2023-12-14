<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscapacidadExpediente extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():BelongsTo
    {
        return $this->belongsTo(Expediente::class,'expediente_id');
    }

    
}
