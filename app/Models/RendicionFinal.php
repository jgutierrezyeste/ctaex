<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RendicionFinal extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='rendiciones_finales';

    
    public function rendiciones():BelongsTo
    {
        return $this->belongsTo(Rendicion::class,'rendicion_id');
    }
   
}
