<?php

namespace fashions\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    public function index()
    {
        return view('front.login');
    }
}
