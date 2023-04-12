<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_combustibile', 'id_confrontato', 'tipoconsumo', 'unitaconsumate'
    ];

    public function combustibile(): BelongsTo{
        return $this->belongsTo(combustibile::class);
    }
}
