<?php

namespace App\Controllers;

class Copyright extends BaseController
{
    public function index(): string
    {
        return view('/copyright/index.php');
    }
}
