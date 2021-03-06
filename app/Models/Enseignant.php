<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{

   protected $guarded = [
    'id',
];
    use HasFactory;

    public function modules()
    {
        return $this->belongsTo(Module::class);
    }
}
