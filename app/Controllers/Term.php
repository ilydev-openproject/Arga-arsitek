<?php

namespace App\Controllers;

class Term extends BaseController
{
    public function index(): string
    {
        return view('/term/index.php');
    }
}
