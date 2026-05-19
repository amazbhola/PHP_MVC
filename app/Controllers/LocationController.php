<?php

namespace App\Controllers;

use App\Models\Location;

class LocationController
{
    // Show All Data
    public function index()
    {
        $model = new Location();

        $data = $model->all();

        return view('location/index', compact('data'));
    }

    // Create Form
    public function create()
    {
        return view('location/create');
    }

    // Store Data
    public function store()
    {
        $data = $_POST;

        $model = new Location();

        $model->create($data);

        header('Location: /location');
    }

    // Show Single Data
    public function show($id)
    {
        echo "Show Location ID: " . $id;
    }

    // Edit Form
    public function edit($id)
    {
        echo "Edit Location ID: " . $id;
    }

    // Update Data
    public function update($id)
    {
        echo "Update Location ID: " . $id;
    }

    // Delete Data
    public function delete($id)
    {
        echo "Delete Location ID: " . $id;
    }
}
