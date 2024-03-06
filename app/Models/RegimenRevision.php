<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegimenRevision extends Model
{
    use HasFactory;
    protected $table='regimenes_revisiones';
    protected $guarded=['id'];

    public function tiposregimen():BelongsTo
    {
        return $this->belongsTo(TipoRegimen::class,'tipo_regimen_id');
    }
}
