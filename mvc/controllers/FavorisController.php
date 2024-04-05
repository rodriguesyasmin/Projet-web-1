<?php

namespace App\Controllers;

use App\Models\Favoris;
use App\Providers\View;

class FavorisController
{

    public function index()
    {
        $favoris = new Favoris;
        $mesFavoris = $favoris->selectFavoris($_SESSION['user_id']);
        //var_dump($mesFavoris);
        //die();
        if ($mesFavoris) {
            return View::render('favoris/index', ['favoris' => $mesFavoris]);
        }
    }

    public function store($data)
    {

        //var_dump($data);
        $mise = new Favoris;
        $insert = $mise->insert($data);
        if ($insert) {
            $favoris = new Favoris;
            $mesFavoris = $favoris->selectId($data['user_stampee_id']);
            // var_dump($mesFavoris);
            // die();
            return View::redirect('favoris/index');
        } else {
            //echo 'nao adicionou';
            // $errors = ['Le timbre a déjà été ajouté à la liste des favoris'];
            // return View::render('favoris/index', ['errors' => $errors]);
        }
    }
}
