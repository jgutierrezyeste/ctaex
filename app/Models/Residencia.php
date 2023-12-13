<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Residencia extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function expedientes():HasOne
    {
        return $this->hasOne(Expediente::class,'residencia_id');
    }
}
