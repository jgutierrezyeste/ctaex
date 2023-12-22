<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PatologiaGeneral extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='patologia_general';

    

    public function patologiasconcretas():HasMany
    {
        return $this->hasMany(PatologiaConcreta::class,'patologia_general_id');
    }
}
