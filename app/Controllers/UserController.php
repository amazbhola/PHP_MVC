<?php

namespace App\Controllers;



class UserController
{
    public function index()
    {
        return view("user/index");
    }

    public function create()
    {
        return view('user/create');
    }
}