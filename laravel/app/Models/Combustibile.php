<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Combustibile extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo','tecnologia','poterecalorifero','unitadimisura','costo1kwhlordo','costo1kwhnetto','resaconversione'
    ];

    public function consumo(): HasMany {
        return $this->hasMany(Consumo::class);
    }

    public function sessioni(): HasMany {
        return $this->hasMany(Sessione::class);
    }
}
