<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='tipos_via';
}
