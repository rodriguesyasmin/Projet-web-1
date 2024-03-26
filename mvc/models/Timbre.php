<?php

namespace App\Models;

use App\Models\CRUD;

class Timbre extends CRUD
{
    protected $table = "timbre_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['identifiant', 'nom', 'description', 'annee', 'prix', 'condition', 'pays', 'certifie', 'couleur', 'dimensions', 'categorie_stampee_id', 'encheres_stampee_id'];
}