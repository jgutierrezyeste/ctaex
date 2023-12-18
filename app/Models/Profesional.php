<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesional extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='profesionales';

    public function salidas():HasMany
    {
        return $this->hasMany(SalidaProfesional::class,'profesional_id');
    }
    
}
