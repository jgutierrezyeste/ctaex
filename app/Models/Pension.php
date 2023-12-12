<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pension extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():BelongsToMany
    {
        return $this->belongsToMany(Expediente::class,'expediente_pension','pension_id','expediente_id');
    }

}
