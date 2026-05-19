<?php

namespace App\Controllers;

use App\Models\Tender;

class TenderController
{
    public function index()
    {
        return view('tender/index');
    }

    public function create()
    {
        return view('/tender/create');
    }
}
