<?php

namespace App\Controllers;

use App\Libraries\View;

class ChocolatsController
{
    public function index()
    {
        return View::render('treats/candy.view');
    }

    public function store()
    {
        
    }
}