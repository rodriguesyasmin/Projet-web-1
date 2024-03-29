<?php

namespace App\Models;

use App\Models\CRUD;

class Timbre extends CRUD
{
    protected $table = "timbre_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['identifiant', 'nom', 'description', 'annee', 'prix', 'etat', 'pays', 'certifie', 'couleur', 'dimensions', 'categorie_stampee_id', 'user_stampee_id'];

    
}