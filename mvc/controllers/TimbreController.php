<?php

namespace App\Controllers;

use App\Models\Categorie;
use App\Models\Timbre;
use App\Models\Privilege;
use App\Providers\View;
use App\Providers\Validator;

class TimbreController
{


    public function create()
    {
        // if ($_SESSION['privilege_id'] == 1) {
        $categorie = new Categorie;
        $categorie = $categorie->select('nom');
        return View::render('timbre/create', ['categories' => $categorie]);
        // } else {
        //     return View::render('error');
        // }
    }

    // public function store($data)
    // {

    //     // if ($_SESSION['privilege_id'] == 1) {
    //         $validator = new Validator;
    //         $validator->field('nom', $data['nom'])->min(2)->max(50);
    //         $validator->field('email', $data['email'])->min(2)->max(50)->email()->unique('User');
    //         $validator->field('mot_de_passe', $data['mot_de_passe'])->min(6)->max(40);

    //         // $validator->field('privilge_id', $data['privilege_id'], 'Privilege')->required();


    //         if ($validator->isSuccess()) {
    //             $user = new User;

    //             $data['mot_de_passe'] = $user->hashPassword($data['mot_de_passe']);
    //             //$data['email'] = $data['email'];
    //             $insert = $user->insert($data);
    //             if ($insert) {
    //                 return View::redirect('login');
    //             } else {
    //                 return View::render('error');
    //             }
    //         } else {
    //             $errors = $validator->getErrors();
    //             $privilege = new Privilege;
    //             $privileges = $privilege->select('privilege');
    //             return View::render('user/create', ['errors' => $errors, 'user' => $data, 'privileges' => $privileges]);
    //         }
    //     // } else {
    //     //     return View::render('error');
    //     // }
    // }
}