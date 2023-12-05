<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JudicialesDefensa extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function letrados():BelongsTo
    {
        return $this->belongsTo(Letrado::class,'letrado_id');
    }

    
    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    
    public function motivos():BelongsTo
    {
        return $this->belongsTo(Motivo::class,'motivo_id');
    }
}
