<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarpetaDeceso extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function segurosdecesos():HasMany
    {
        return $this->hasMany(SeguroDeceso::class,'carpeta_deceso_id');
    }

    
}
