<?php

namespace App\Models;

use App\Models\CRUD;

class Image extends CRUD
{
    protected $table = "image_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['image_principale', 'image_secondaire', 'timbre_stampee_id'];

    public function selectImage($id)
{
    $sql = "SELECT * FROM image_stampee WHERE timbre_stampee_id = $id";

    if ($stmt = $this->query($sql)) {
        $queryResults = $stmt->fetchAll();

       
        if (!empty($queryResults)) {
            return $queryResults[0]['image_principale'];
        } else {
       
            return null;
        }
    } else {
        return false;
    }
}

}