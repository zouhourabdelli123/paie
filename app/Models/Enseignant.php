<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
        protected $fillable = [
        'matricule', 'nom', 'prenom', 'telephone', 'statut',
        'cout_heure', 'heures_prevues_semaine', 'salaire_base',
        'numero_compte', 'nom_banque', 'actif'
    ];

}
