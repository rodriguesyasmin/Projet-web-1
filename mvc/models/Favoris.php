<?php

namespace App\Models;

use App\Models\CRUD;

class Favoris extends CRUD
{
    protected $table = "favoris_stampee";
    protected $primaryKey = 'id';
    protected $fillable = ['encheres_stampee_id', 'user_stampee_id'];

    public function selectFavoris($id)
    {
        $sql = "SELECT favoris_stampee.*, 
        timbre_stampee.nom, 
          timbre_stampee.annee, 
             timbre_stampee.identifiant, 
        timbre_stampee.id AS timbre_stampee_id 
        FROM   favoris_stampee 
        INNER JOIN encheres_stampee 
                ON encheres_stampee.id = favoris_stampee.encheres_stampee_id 
        INNER JOIN timbre_stampee 
                ON timbre_stampee.id = encheres_stampee.timbre_stampee_id 
        WHERE  favoris_stampee.user_stampee_id = $id;";

        if ($stmt = $this->query($sql)) {
            return $stmt->fetchAll();
        } else {
            return false;
        }
    }
}
