<?php

namespace App\Controllers;

use App\Providers\View;

class AProposController
{

    public function index()
    {
        View::render('Apropos/index');
    }
}
