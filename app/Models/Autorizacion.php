<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Autorizacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='autorizaciones';

    public function revisiones():BelongsToMany
    {
        return $this->belongsToMany(Revision::class,'autorizaciones_revisiones','autorizacion_id','revision_id');
    }

}
