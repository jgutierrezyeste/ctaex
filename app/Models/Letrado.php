<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Letrado extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    
    public function defensasjudiciales():HasMany
    {
        return $this->hasMany(DefensaJudicial::class,'letrado_id');
    }
}
