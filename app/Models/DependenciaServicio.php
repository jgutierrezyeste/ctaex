<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DependenciaServicio extends Model
{
    use HasFactory;
    protected $guarded=['id'];
   /* public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'dependenciaservicio_id');
    }*/

    public function dependencias():HasMany
    {
        return $this->hasMany(Dependencia::class,'dependenciaservicio_id');
    }
}
