<?php

if ($argc < 2) {

    die("Usage: php make_migration.php create_users_table");
}

$migrationName = $argv[1];

$date = date('Y_m_d_His');

$fileName = "{$date}_{$migrationName}.php";

$path = __DIR__ . "/app/database/migrations/" . $fileName;

$tableName = str_replace(
    ['create_', '_table'],
    '',
    $migrationName
);

$template = <<<PHP
<?php

use App\Base\Schema;

Schema::create('$tableName', function (\$table) {

    \$table->id();

    \$table->timestamps();

});
PHP;

file_put_contents($path, $template);

echo "Migration created: {$fileName}";