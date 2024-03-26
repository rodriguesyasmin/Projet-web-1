<?php
namespace App\Models;
use App\Models\CRUD;

class Client extends CRUD{
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'zip_code', 'phone', 'email'];
}


