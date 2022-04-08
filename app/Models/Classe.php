<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{
    use HasFactory;

    /**
     * Get all of the enseignants for the Classe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignants(): HasMany
    {
        return $this->hasMany(Enseignant::class);
    }
}
