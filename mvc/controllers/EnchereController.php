<?php

namespace App\Controllers;

use App\Models\Enchere;
use App\Models\Timbre;
use App\Models\Privilege;
use App\Providers\View;
use App\Models\Image;
use App\Providers\Auth;
use App\Providers\Validator;

class EnchereController
{
    public function create()
    {
        $timbre = new Timbre;
        $timbre = $timbre->select('nom');
        return View::render('enchere/create', ['timbres' => $timbre]);
    }

    public function store($data)
    {
        var_dump($data);
        $validator = new Validator;
        $validator->field('prix_initial', $data['prix_initial'])->min(0)->max(99999999.99);
        $validator->field('date_heure_debut', $data['date_heure_debut']);
        $validator->field('date_heure_fin', $data['date_heure_fin']);

        if ($validator->isSuccess()) {
            $enchere = new Enchere;
            $inserted_enchere_id = $enchere->insert($data);
        } else {
            $errors = $validator->getErrors();
            return View::render('enchere/create', ['errors' => $errors]);
        }
    }
    public function index()
    {
        $data = [];
        $enchere = new Enchere;
        $encheres = $enchere->select();

        foreach ($encheres as $enchere) {

            $timbre = new Timbre;
            $selectId = $timbre->selectId($enchere['timbre_stampee_id']);

            $image = new Image;
            $image = $image->selectImage($enchere['timbre_stampee_id']);
            if ($selectId) {
                $data[] = [
                    'encherePrix' => $enchere['prix_initial'],
                    'enchereId' => $enchere['id'],
                    'enchereDateFin' => $enchere['date_heure_fin'],
                    'timbre' => $selectId,
                    'image' => $image,
                    'id' => $selectId['id']
                ];
            } else {
                return View::render('error');
            }
        }
        return View::render('enchere/index', ['data' => $data]);
    }
    public function show($data = [])
    {
        $timbreId = $data['id'];
        $timbre = new Timbre;
        $selectId = $timbre->selectId($timbreId);

        if ($selectId) {
            $enchere = new Enchere;
            $enchereId = $enchere->selectIdByTimbreId($timbreId);

            if ($enchereId) {

                return View::render('enchere/detail', ['timbre' => $selectId, 'enchere' => $enchereId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error');
        }
    }
}
