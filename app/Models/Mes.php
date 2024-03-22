<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mes extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='años';

    public function Declaraciones():HasMany
    {
        return $this->hasMany(Declaracion::class,'mes_id');
    }

}
