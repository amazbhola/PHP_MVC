<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



$pdo = new PDO(
    "mysql:host={$_ENV['HOST_NAME']};
    dbname={$_ENV['DB_NAME']}",
    $_ENV['DB_USER'],
    $_ENV['DB_PASSWORD']
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// CREATE migrations TABLE

$pdo->exec("
    CREATE TABLE IF NOT EXISTS migrations (

        id INT AUTO_INCREMENT PRIMARY KEY,

        migration VARCHAR(255) NOT NULL,

        created_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP

    )
");

echo "Migration table checked <br>";


// RUN MIGRATION FILES

$files = scandir(
    __DIR__ . '/app/database/migrations'
);

foreach ($files as $file) {

    if ($file == '.' || $file == '..') {
        continue;
    }

    // CHECK ALREADY MIGRATED

    $stmt = $pdo->prepare(
        "SELECT COUNT(*) FROM migrations
         WHERE migration = ?"
    );

    $stmt->execute([$file]);

    if ($stmt->fetchColumn()) {

        echo "Skipped: $file <br>";
        continue;
    }

    require __DIR__ .
        '/app/database/migrations/' .
        $file;

    // INSERT INTO migrations TABLE

    $insert = $pdo->prepare(
        "INSERT INTO migrations (migration)
         VALUES (?)"
    );

    $insert->execute([$file]);

    echo "Migrated: $file <br>";
}