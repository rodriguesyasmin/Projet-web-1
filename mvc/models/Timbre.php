<?php

namespace App\Models;

use App\Models\CRUD;

class Timbre extends CRUD
{
    protected $table = "timbre_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['identifiant', 'nom', 'description', 'annee', 'prix', 'etat', 'pays', 'certifie', 'couleur', 'dimensions', 'categorie_stampee_id', 'user_stampee_id'];

    final public function selectParId($value)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            return false;
        }
    }
}
