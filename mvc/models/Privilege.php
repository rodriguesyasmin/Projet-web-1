<?php
namespace App\Models;
use App\Models\CRUD;

class Privilege extends CRUD{
    protected $table = "privilege_stampee";
    protected $primaryKey = "id";
}