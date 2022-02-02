<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;

class TreesController
{
    public function index()
    {
        return View::render('forrest/trees.view');
    }
}