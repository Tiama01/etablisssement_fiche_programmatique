<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{

    protected $fillable =
    [
    'matricule',
    'Nom',
    'Prenom',
    'Sexe',
    'mail',
    'type',
    'grade',
    'Telephone',
    'Diplome',
    'Date',
    'Rattachement',
    'abattement'
];
    use HasFactory;
}
