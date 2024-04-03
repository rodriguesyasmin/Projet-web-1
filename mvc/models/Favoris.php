<?php

namespace App\Models;

use App\Models\CRUD;

class Favoris extends CRUD
{
    protected $table = "favoris_stampee";
    protected $primaryKey = null;
    protected $fillable = ['encheres_stampee_id', 'user_stampee_id'];
}
