<?php

namespace App\Controller;

use App\Core\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home', [
            'title' => 'Accueil - CoreMVCPHPVanillia'
        ]);
    }
}
