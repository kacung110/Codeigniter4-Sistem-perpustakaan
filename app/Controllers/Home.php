<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function sampp()
    {
        return view('welcome_message');
    }
}
