<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consumo extends Model
{
    use HasFactory;

    private $fillable = [
        'id_combustibile', 'tipo_consumo', 'unita_consumate'
    ];

    public function combustibile(): HasMany{
        return $this->hasMany(combustibile::class);
    }
}
