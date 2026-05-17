<?php

namespace App\Base;

use PDO;

class Schema
{
    public static function create($table, $callback)
    {
        $blueprint = new Blueprint();

        $callback($blueprint);

        $columns = $blueprint->toSql();

        $pdo = new PDO(
            "mysql:host={$_ENV['HOST_NAME']};
            dbname={$_ENV['DB_NAME']}",
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD']
        );

        $sql = "CREATE TABLE IF NOT EXISTS
                $table ($columns)";

        $pdo->exec($sql);

        echo "Table created: $table <br>";
    }

    public static function drop($table)
    {
        $pdo = new PDO(
            "mysql:host={$_ENV['HOST_NAME']};
            dbname={$_ENV['DB_NAME']}",
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD']
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DROP TABLE IF EXISTS {$table}";

        $pdo->exec($sql);

        echo "Table dropped: {$table} <br>";
    }
}