<?php

namespace App\Controllers;

use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;


class AuthController
{

    public function index()
    {
        return View::render('auth/index');
    }
    public function store($data)
    {

        $validator = new Validator;
        $validator->field('email', $data['email'])->min(2)->max(50)->email();
        $validator->field('mot_de_passe', $data['mot_de_passe'])->min(6)->max(20);


        if ($validator->isSuccess()) {
            $user = new User;
            $checkuser = $user->checkUser($data['email'], $data['mot_de_passe']);
            if ($checkuser) {
                $user = new   User;
                $select = $user->select();

                if ($select) {
                    return View::render('user/index', ['users' => $select]);
                } else {
                    return View::render('error');
                }
            } else {
                $errors['message'] = "Please check your credentials";
                return View::render('auth/index', ['errors' => $errors, 'user' => $data]);
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('auth/index', ['errors' => $errors, 'user' => $data]);
        }
    }
    public function delete()
    {
        session_destroy();
        return View::redirect('login');
    }
}