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
        return $this->hasMany(JudicialesDefensa::class,'juzgado_id');
    }

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_juzgado','juzgado_id','expediente_id');
    }
}
