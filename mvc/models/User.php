<?php

namespace App\Models;

use App\Models\CRUD;

class User extends CRUD
{
    protected $table = "user_stampee";
    protected $primaryKey = "id";
    protected $fillable = ['nom', 'email', 'mot_de_passe', 'pays_de_naissance', 'Identifiant', 'privilege_stampee_id'];

    public function hashPassword($password, $cost = 10)
    {
        return  password_hash($password, PASSWORD_BCRYPT, ['cost' => $cost]);
    }

    public function checkUser($username, $password)
    {
        // return $password;
        $user = $this->unique('email', $username);


        if ($user) {
            if (password_verify($password, $user['mot_de_passe'])) {
                session_regenerate_id();
                $_SESSION['user_id'] = $user['id'];
                // $_SESSION['user_nom'] = $user['name'];
                // $_SESSION['privilege_id'] = $user['privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}