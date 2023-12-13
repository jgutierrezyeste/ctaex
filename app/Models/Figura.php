<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Figura extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function reintegros():HasMany
    {
        return $this->hasMany(Reintegro::class,'figura_id');
    }
}
