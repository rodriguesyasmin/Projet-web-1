<?php

namespace App\Models;
use App\Models\CRUD;
class Mise extends CRUD
{
    protected $table = "mise_stampee";
    protected $primaryKey = null;
    protected $fillable = ['encheres_stampee_id', 'user_stampee_id'];
}