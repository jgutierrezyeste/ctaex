<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Prestacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='prestaciones';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_prestacion','prestacion_id','expediente_id'); 
    }
}
