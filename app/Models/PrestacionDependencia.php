<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrestacionDependencia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='prestacion_dependencias';
   /* public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'prestaciondependencia_id');
    }*/

    public function dependencias():HasMany
    {
        return $this->hasMany(Dependencia::class,'prestaciondependencia_id');
    }
}
