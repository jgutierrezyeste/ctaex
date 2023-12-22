<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PatologiaConcreta extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='patologia_concreta';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_patologia_concreta','patologia_concreta_id','expediente_id');
    }

    public function patologiasgenerales():BelongsTo
    {
        return $this->belongsTo(PatologiaGeneral::class,'patologia_general_id');
    }
}
