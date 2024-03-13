<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Motivo extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function defensasjudiciales():HasMany
    {
        return $this->hasMany(DefensaJudicial::class,'motivo_id');
    }

    public function administraciones():HasMany
    {
        return $this->hasMany(AdministracionBien::class,'motivo_cancelacion_id');
    }
}
