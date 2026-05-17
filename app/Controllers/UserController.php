<?php

namespace App\Controllers;

class UserController
{
    public function index()
    {
        echo "User index method";
    }

    public function create()
    {
        echo "Create User";
    }

    public function store()
    {
        echo "Store User";
    }

    public function show($id)
    {
        echo "Show User ID: " . $id;
    }

    public function edit($id)
    {
        echo "Edit User ID: " . $id;
    }

    public function update($id)
    {
        echo "Update User ID: " . $id;
    }

    public function delete($id)
    {
        echo "Delete User ID: " . $id;
    }
}