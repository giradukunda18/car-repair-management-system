<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mechanics extends Controller
{
    //
    public function mechanic_login()
    {
        return view("login_mechanics");
    }
}
