<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'red_id'
    ];

    public function redes ():BelongsTo{
        return $this->belongsTo(Red::class);
    }
}
