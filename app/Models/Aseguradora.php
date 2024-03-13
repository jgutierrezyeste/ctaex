<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aseguradora extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'aseguradora_id');
    }

    

    public function segurosdecesos():HasMany
    { 
        return $this->hasMany(SeguroDeceso::class,'aseguradora_id');
    }
}
