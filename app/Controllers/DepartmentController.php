<?php

namespace App\Controllers;

use App\Models\Department;

class DepartmentController
{
    // Show All Data
    public function index()
    {
        $model = new Department();

        $data = $model->all();

        return view('department/index', compact('data'));
    }

    // Create Form
    public function create()
    {
        return view('department/create');
    }

    // Store Data
    public function store()
    {
        $data = $_POST;

        $model = new Department();

        $model->create($data);

        header('Location: /department');
    }

    // Show Single Data
    public function show($id)
    {
        echo "Show Department ID: " . $id;
    }

    // Edit Form
    public function edit($id)
    {
        echo "Edit Department ID: " . $id;
    }

    // Update Data
    public function update($id)
    {
        echo "Update Department ID: " . $id;
    }

    // Delete Data
    public function delete($id)
    {
        echo "Delete Department ID: " . $id;
    }
}
