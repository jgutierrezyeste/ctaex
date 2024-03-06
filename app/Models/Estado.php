<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='estados';

    public function expedientes():HasMany
    {
        return $this->hasMany(Expediente::class,'estado_id');
    }

    public function defensasjudiciales():HasMany
    {
        return $this->hasMany(DefensaJudicial::class,'estado_id');
    }

    public function administracionesbienes():HasMany
    {
        return $this->hasMany(AdministracionBien::class,'estado_id');
    }
}
