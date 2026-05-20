<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoInmueble extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipo_inmuebles';

    public function inmuebles():HasMany
    {
        return $this->hasMany(BienInmueble::class,'tipo_id');
    }
}
