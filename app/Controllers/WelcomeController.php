<?php
namespace App\Controllers;

class WelcomeController
{
    public function index()
    {
        return view('welcome', ['title' => 'Welcome'], true);
    }
}