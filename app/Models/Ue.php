<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ue extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    /**
     * Get the semestre that owns the UE
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semetre(): BelongsTo
    {
        return $this->belongsTo(Semestre::class);
    }
}
