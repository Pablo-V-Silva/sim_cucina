<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Combustibile extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo','tecnologia','poterecalorifero','unitadimisura','costo1kwhlordo','costo1kwhnetto','resaconversione'
    ];

    public function consumo(): BelongsTo {
        return $this->belongsTo(Consumo::class);
    }
}
