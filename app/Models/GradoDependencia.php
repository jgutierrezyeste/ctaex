<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradoDependencia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='grado_dependencias';
    

    public function dependencias():HasMany
    {
        return $this->hasMany(Dependencia::class,'grado_id');
    }

    
}
