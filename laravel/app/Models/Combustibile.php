<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Combustibile extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo','tecnologia','potere_calorifero','unita_di_misura','costo_1kwh_lordo','costo_1kwh_netto','resa_conversione'
    ];

    public function consumo(): BelongsTo {
        return $this->belongsTo(Consumo::class);
    }
}
