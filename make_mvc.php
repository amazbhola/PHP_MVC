<?php

/*
|--------------------------------------------------------------------------
| Usage
|--------------------------------------------------------------------------
|
| php make_mvc.php Tender
|
*/

if ($argc < 2) {
    die("Usage: php make_mvc.php ModelName\n");
}

$name = ucfirst($argv[1]);
$nameLower = strtolower($name);
$tableName = $nameLower . 's';

$modelPath      = __DIR__ . "/app/Models/{$name}.php";
$controllerPath = __DIR__ . "/app/Controllers/{$name}Controller.php";

$viewFolderPath = __DIR__ . "/app/views/" . strtolower($name);

$indexViewPath  = $viewFolderPath . "/index.php";
$createViewPath = $viewFolderPath . "/create.php";


/*
|--------------------------------------------------------------------------
| Create View Folder
|--------------------------------------------------------------------------
*/

if (!is_dir($viewFolderPath)) {
    mkdir($viewFolderPath, 0777, true);
}


/*
|--------------------------------------------------------------------------
| MODEL TEMPLATE
|--------------------------------------------------------------------------
*/

$modelTemplate = <<<PHP
<?php

namespace App\Models;

use App\Base\Model;

class {$name} extends Model
{
    protected \$table = '$tableName';

    protected \$fillable = [
        //
    ];
}

PHP;


/*
|--------------------------------------------------------------------------
| CONTROLLER TEMPLATE
|--------------------------------------------------------------------------
*/

$controllerTemplate = <<<PHP
<?php

namespace App\Controllers;

use App\Models\\{$name};

class {$name}Controller
{
    // Show All Data
    public function index()
    {
        \$model = new {$name}();

        \$data = \$model->all();

        return view('{$nameLower}/index', compact('data'));
    }

    // Create Form
    public function create()
    {
        return view('{$nameLower}/create');
    }

    // Store Data
    public function store()
    {
        \$data = \$_POST;

        \$model = new {$name}();

        \$model->create(\$data);

        header('Location: /{$nameLower}');
    }

    // Show Single Data
    public function show(\$id)
    {
        echo "Show {$name} ID: " . \$id;
    }

    // Edit Form
    public function edit(\$id)
    {
        echo "Edit {$name} ID: " . \$id;
    }

    // Update Data
    public function update(\$id)
    {
        echo "Update {$name} ID: " . \$id;
    }

    // Delete Data
    public function delete(\$id)
    {
        echo "Delete {$name} ID: " . \$id;
    }
}

PHP;


/*
|--------------------------------------------------------------------------
| INDEX VIEW TEMPLATE
|--------------------------------------------------------------------------
*/

$indexViewTemplate = <<<HTML
<div class="min-h-screen bg-gray-100 p-8">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold">
            {$name} List
        </h1>

        <a href="/{$nameLower}/create"
           class="bg-gray-800 text-white px-5 py-3 rounded-lg">
            + Create {$name}
        </a>

    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <p>{$name} index page</p>
    </div>

</div>
HTML;


/*
|--------------------------------------------------------------------------
| CREATE VIEW TEMPLATE
|--------------------------------------------------------------------------
*/

$createViewTemplate = <<<HTML
<div class="min-h-screen bg-gray-100 py-10">

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">

        <h2 class="text-3xl font-bold mb-8">
            Create {$name}
        </h2>

        <form action="/{$nameLower}/store" method="POST">

            <div class="mb-5">

                <label class="block mb-2 font-semibold">
                    Name
                </label>

                <input type="text"
                       name="name"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3">

            </div>

            <button type="submit"
                    class="bg-gray-800 text-white px-6 py-3 rounded-lg">
                Save {$name}
            </button>

        </form>

    </div>

</div>
HTML;


/*
|--------------------------------------------------------------------------
| CREATE FILES
|--------------------------------------------------------------------------
*/

file_put_contents($modelPath, $modelTemplate);

file_put_contents($controllerPath, $controllerTemplate);

file_put_contents($indexViewPath, $indexViewTemplate);

file_put_contents($createViewPath, $createViewTemplate);


/*
|--------------------------------------------------------------------------
| SUCCESS MESSAGE
|--------------------------------------------------------------------------
*/

echo "=====================================\n";
echo " MVC Created Successfully\n";
echo "=====================================\n";
echo "Model      : {$modelPath}\n";
echo "Controller : {$controllerPath}\n";
echo "Views      : {$viewFolderPath}\n";
echo "=====================================\n";