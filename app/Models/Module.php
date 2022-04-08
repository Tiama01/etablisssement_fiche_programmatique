<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $fillable =
    [
    'id',
    'siglmod',
    'libmod',
    'creditmod',
    'vh_ct',
    'vh_td',
    'vh_tp',
    'poids'
];
    use HasFactory;
}
