<?php

namespace App\Controllers;

class Privacy extends BaseController
{
    public function index(): string
    {
        return view('/privacy/index.php');
    }
}
