<?php

namespace App\Controllers;

use App\Models\Mise;
use App\Models\Timbre;
use App\Models\Enchere;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class MiseController
{
    public function store($data)
    {

        $data['date_heure'] = date('Y-m-d H:i:s');
        // if ($_SESSION['privilege_id'] == 1) {
        $validator = new Validator;
        $validator->field('montant_mise', $data['montant_mise'])->required();

        if ($validator->isSuccess()) {
            $mise = new Mise;
            $insert = $mise->insert($data);
            if ($insert) {
                $enchere = new Enchere;
                $update = $enchere->updatePrix($data['montant_mise'], $data['encheres_stampee_id']);

                if ($update) {
                    return View::redirect("enchere/show?id={$data['timbre_id']}");
                } else {
                    echo "error";
                }
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            echo ' ERROR ';
        }
    }
}
