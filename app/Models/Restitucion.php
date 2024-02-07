<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Restitucion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='restituciones';

    public function juzgados():BelongsTo
    {
        return $this->belongsTo(Juzgado::class,'juzgado_id');
    }

    
    public function figuras():BelongsTo
    {
        return $this->belongsTo(Figura::class,'figura_id');
    }

    
    public function regimenes():BelongsTo
    {
        return $this->belongsTo(Regimen::class,'regimen_id');
    }

    public function años():BelongsTo
    {
        return $this->belongsTo(Año::class,'año_id');
    }
}
