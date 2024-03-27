<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoRendicionAnual extends Model
{

    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipos_rendicion_anual';

    public function rendiciones_anuales():HasMany
    {
        return $this->hasMany(RendicionAnual::class,'tipo_id');
    }
}
