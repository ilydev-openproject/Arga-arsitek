<?php

namespace App\Controllers;

class Tim extends BaseController
{
    public function index(): string
    {
        return view('/tim/index.php');
    }
}
