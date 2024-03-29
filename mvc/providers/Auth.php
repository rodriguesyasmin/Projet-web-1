<?php

namespace App\Providers;

use App\Providers\View;

class Auth
{
    static public function session()
    {
        if (isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint']  === md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
            return true;
        } else {
            return View::redirect('login');
        }
    }
    static public function getUserId()
    {
        // Retorna o ID do usuário da sessão, se estiver autenticado
        return $_SESSION['user_id'] ?? null;
    }
}