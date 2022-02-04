<?php

namespace App\Controllers;

use App\Libraries\View;

class AboutController
{
    public function index()
    {
        return View::render('about/about.view');
    }
}