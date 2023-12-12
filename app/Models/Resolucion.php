<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resolucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function resoluciones():BelongsToMany
    {
        return $this->belongsToMany(Resolucion::class,'expediente_declaracion','resolucion_id','expediente_id');
    }
}
