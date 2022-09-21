<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerpages extends Controller
{
    public function index()
    {
        return "hello user!";
    }

    public function homePage()
    {
        return "Hello in home page";
    }
}
