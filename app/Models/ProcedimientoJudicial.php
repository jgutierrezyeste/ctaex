<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProcedimientoJudicial extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='procedimientos_judiciales';
    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'procedimientojudicial_id');
    }
}
