<?php

if ($argc < 2) {
    die("Usage: php make_mvc.php ModelName\n");
}

$name = ucfirst($argv[1]);

$modelPath = __DIR__ . "/app/Models/{$name}.php";
$controllerPath = __DIR__ . "/app/Controllers/{$name}Controller.php";


// ---------------- MODEL ----------------
$modelTemplate = <<<PHP
<?php

namespace App\Models;

class {$name}
{
    // Write model logic here
}
PHP;


// ---------------- CONTROLLER ----------------
$controllerTemplate = <<<PHP
<?php

namespace App\Controllers;

class {$name}Controller
{
    public function index()
    {
        echo "{$name} index method";
    }

    public function create()
    {
        echo "Create {$name}";
    }

    public function store()
    {
        echo "Store {$name}";
    }

    public function show(\$id)
    {
        echo "Show {$name} ID: " . \$id;
    }

    public function edit(\$id)
    {
        echo "Edit {$name} ID: " . \$id;
    }

    public function update(\$id)
    {
        echo "Update {$name} ID: " . \$id;
    }

    public function delete(\$id)
    {
        echo "Delete {$name} ID: " . \$id;
    }
}
PHP;


// CREATE FILES
file_put_contents($modelPath, $modelTemplate);
file_put_contents($controllerPath, $controllerTemplate);

echo "Model & Controller created successfully for: {$name}\n";