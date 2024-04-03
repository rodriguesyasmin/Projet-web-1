<?php

namespace App\Controllers;

use App\Models\Categorie;
use App\Models\Timbre;
use App\Models\Privilege;
use App\Providers\View;
use App\Models\Image;
use App\Providers\Auth;
use App\Providers\Validator;

class TimbreController
{
    public function index()
    {

        $user_id = Auth::getUserId();

        if ($user_id !== null) {

            $timbre = new Timbre;
            $all_timbres = $timbre->select();
            $user_timbres = [];
            foreach ($all_timbres as $timbre) {
                if ($timbre['user_stampee_id'] == $user_id) {
                    $user_timbres[] = $timbre;
                }
            }
            if (!empty($user_timbres)) {
                return View::render('timbre/index', ['timbres' => $user_timbres]);
            } else {
                return View::render('error', ['message' => 'Pas de timbres.']);
            }
        } else {
            return View::render('error', ['message' => 'User ID not found.']);
        }
    }

    public function create()
    {
        $categorie = new Categorie;
        $categories = $categorie->select('nom');
        return View::render('timbre/create', ['categories' => $categories]);
    }

    public function store($data)
    {
        $validator = new Validator;
        // Validation des données du formulaire
        $validator = new Validator;
        $validator->field('nom', $data['nom'])->min(2)->max(50);
        $validator->field('description', $data['description'])->min(2)->max(255);
        $validator->field('annee', $data['annee'])->min(4)->max(4);
       
        $validator->field('etat', $data['etat'])->min(2)->max(45);
        $validator->field('pays', $data['pays'])->min(2)->max(25);
        $validator->field('certifie', $data['certifie']);
        $validator->field('couleur', $data['couleur'])->min(2)->max(45);
        $validator->field('dimensions', $data['dimensions'])->min(2)->max(45);
        $validator->field('categorie_stampee_id', $data['categorie_stampee_id'])->required();

        $validator->field('user_stampee_id', $data['user_stampee_id']);

        if ($validator->isSuccess()) {
            $timbre = new Timbre;
            $inserted_timbre_id = $timbre->insert($data);

            // Manipule o upload da imagem principal
            if ($_FILES['image_principale']['error'] === UPLOAD_ERR_OK) {
                $target_dir = "images/";
                $target_file = $target_dir . basename($_FILES["image_principale"]["name"]);
                if (move_uploaded_file($_FILES["image_principale"]["tmp_name"], $target_file)) {
                    $image = new Image;
                    $image_data = array(
                        'image_principale' => $target_file,
                        'timbre_stampee_id' => $inserted_timbre_id
                    );
                    $image->insert($image_data);
                }
            }

            // Manipule o upload das imagens secundárias
            if (!empty($_FILES['image_secondaire']['name'])) {
                $secondary_images = $_FILES['image_secondaire'];
                foreach ($secondary_images['tmp_name'] as $key => $tmp_name) {
                    if ($secondary_images['error'][$key] === UPLOAD_ERR_OK) {
                        $target_file_secondary = $target_dir . basename($secondary_images["name"][$key]);
                        if (move_uploaded_file($secondary_images["tmp_name"][$key], $target_file_secondary)) {
                            $image_data_secondary = array(
                                'image_secondaire' => $target_file_secondary,
                                'timbre_stampee_id' => $inserted_timbre_id
                            );
                            $image->insert($image_data_secondary);
                        }
                    }
                }
            }

            return $this->index();
        } else {
            $errors = $validator->getErrors();
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            return View::render('user/create', ['errors' => $errors, 'user' => $data, 'privileges' => $privileges]);
        }
    }

    public function show($data = [])
    {

        $timbre = new Timbre;
        $selectId = $timbre->selectId($data['id']);
        $img = new Image;
        $img = $img->selectImage($data['id']);

        if ($selectId) {
            return View::render('timbre/show', ['timbre' => $selectId, 'img' => $img]);
        } else {
            return View::render('error');
        }

        //else{
        //     return View::render('error', ['message'=>'Could not find this data']);
        // }
    }

    public function delete($data)
    {

        $timbre = new  Timbre;
        $delete = $timbre->delete($data['id']);
        if ($delete) {

            return View::redirect('timbre/create');
        } else {

            return View::render('error');
        }
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $timbre = new Timbre;
            $selectId = $timbre->selectId($data['id']);
            if ($selectId) {
                $categorie = new Categorie;
                $categories = $categorie->select('nom');
                return View::render('timbre/edit', ['timbre' => $selectId], ['categories' => $categories]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }
    public function update($data, $get)
    {
        $validator = new Validator;
        // Validation des données du formulaire
        $validator->field('nom', $data['nom'])->min(2)->max(50);
        $validator->field('description', $data['description'])->min(2)->max(255);
        $validator->field('annee', $data['annee'])->min(4)->max(4);
        $validator->field('prix', $data['prix'])->min(1)->max(45);
        $validator->field('etat', $data['etat'])->min(2)->max(45);
        $validator->field('pays', $data['pays'])->min(2)->max(25);
        $validator->field('certifie', $data['certifie']);
        $validator->field('couleur', $data['couleur'])->min(2)->max(45);
        $validator->field('dimensions', $data['dimensions'])->min(2)->max(45);
        $validator->field('categorie_stampee_id', $data['categorie_stampee_id']);

        $validator->field('user_stampee_id', $data['user_stampee_id']);

        if ($validator->isSuccess()) {
            $timbre = new Timbre;
            $update = $timbre->update($data, $get['id']); // Assuming the update method is appropriately defined in the Timbre model

            if ($update) {

                return View::render('timbre/show?id=' . $get['id']);
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('timbre/edit', ['errors' => $errors, 'timbre' => $data]);
        }
    }


}