<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class FavoritesController extends Controller
{
    public function index(): void
    {
        $this->view('favorites');
    }
}
