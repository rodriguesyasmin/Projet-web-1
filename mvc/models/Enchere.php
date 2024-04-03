<?php

namespace App\Models;

use App\Models\CRUD;

class Enchere extends CRUD
{
    protected $table = "encheres_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['date_heure_debut', 'date_heure_fin', 'prix_initial', 'coup_de_coeur', 'status_id', 'timbre_stampee_id'];

    final public function selectIdByTimbreId($timbreId)
    {
        $sql = "SELECT * FROM $this->table WHERE timbre_stampee_id = :timbreId";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":timbreId", $timbreId);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            return null;
        }
    }

 
}