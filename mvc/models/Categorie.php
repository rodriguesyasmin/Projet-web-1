<?php

namespace App\Models;

use App\Models\CRUD;

class Categorie extends CRUD
{
    protected $table = "categorie_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['nom'];
}