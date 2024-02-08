<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRegimen extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipos_regimen';
}
