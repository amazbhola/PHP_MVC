<?php

namespace App\Base;

use PDO;
use PDOException;

class Database
{
    private $host_name;
    private $user_name;
    private $db_password;
    private $db_name;

    private $conn = false;
    private $pdo = null;

    public function __construct()
    {
        $this->host_name = $_ENV["HOST_NAME"];
        $this->user_name = $_ENV["DB_USER"];
        $this->db_password = $_ENV["DB_PASSWORD"];
        $this->db_name = $_ENV["DB_NAME"];

        $dsn = "mysql:host={$this->host_name};dbname={$this->db_name};charset=utf8mb4";

        try {

            if (!$this->conn) {

                $this->pdo = new PDO(
                    $dsn,
                    $this->user_name,
                    $this->db_password
                );

                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->conn = true;
            }

        } catch (PDOException $e) {

            die("Database Connection Failed: " . $e->getMessage());
        }
    }

    public function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO {$table} ({$columns})
                VALUES ({$placeholders})";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute($data);
    }

    public function update($table, $data, $where)
    {
        $set = "";

        foreach ($data as $key => $value) {
            $set .= "{$key} = :{$key}, ";
        }

        $set = rtrim($set, ", ");

        $sql = "UPDATE {$table} SET {$set} WHERE {$where}";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute($data);
    }

    public function delete($table, $where)
    {
        $sql = "DELETE FROM {$table} WHERE {$where}";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute();
    }

    public function select($table)
    {
        $sql = "SELECT * FROM {$table}";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $where)
    {
        $sql = "SELECT * FROM {$table} WHERE {$where}";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function __destruct()
    {
        $this->pdo = null;
    }
}