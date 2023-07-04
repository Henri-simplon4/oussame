<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numero',
    ];

    protected $table = 'eleves'; // Définissez le nom de la table si nécessaire

    // Ajoutez d'autres relations ou méthodes si nécessaire
}
