<?php

namespace App\Controllers;


use App\Libraries\View;

class VolunteerController
{
    public function index()
    {
        return View::render('volunteer/volunteer.view');
    }
}