<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fallecido extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function regimenes():BelongsTo
    {
        return $this->belongsTo(Regimen::class,'regimen_id');
    }
}
