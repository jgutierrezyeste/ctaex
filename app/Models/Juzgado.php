<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Juzgado extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    
    public function defensasjudiciales():HasMany
    {
        return $this->hasMany(DefensaJudicial::class,'juzgado_id');
    }

   public function expedientes():HasMany
   {
        return $this->hasMany(Expediente::class,'juzgado_id');
   }

   public function resoluciones():HasMany
    {
        return $this->hasMany(Resolucion::class,'juzgado_id');
    }

    public function restituciones():HasMany
    {
        return $this->hasMany(Restitucion::class,'juzgado_id');
    }

    
}
