<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PatologiaGeneral extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='patologia_general';

    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'patologiageneral_id');
    }
}
