<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parentesco extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    
    public function remociones():HasMany
    {
        return $this->hasMany(Remocion::class,'parentesco_id');
    }
}
