<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IniciadorProcedimiento extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='iniciador_procedimientos';

    public function revisiones():HasMany
    {
        return $this->hasMany(Revision::class,'iniciador_id');
    }

}

