<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regimen extends Model
{
    use HasFactory;
    //protected $table="Regimen";
    protected $guarded=[];
    //protected $primarkey='alcance';

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_regimen','regimen_id','expediente_id');
    }

    
}
