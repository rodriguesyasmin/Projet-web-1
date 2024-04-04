<?php

namespace App\Models;

use App\Models\CRUD;

class Mise extends CRUD
{
    protected $table = "mise_stampee";
    protected $primaryKey = 'id';
    protected $fillable = ['encheres_stampee_id', 'user_stampee_id', 'montant_mise', 'date_heure'];
}
