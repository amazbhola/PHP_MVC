<?php

namespace App\Base;

class Blueprint
{
    private $columns = [];
    private $foreignKeys = [];
    private $lastColumn = null;

    public function id()
    {
        $this->columns[] =
            "id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY";

        $this->lastColumn =
            count($this->columns) - 1;

        return $this;
    }

    public function string($name, $length = 255)
    {
        $this->columns[] =
            "$name VARCHAR($length)";

        $this->lastColumn = count($this->columns) - 1;

        return $this;
    }

    public function integer($name)
    {
        $this->columns[] =
            "$name INT";
    }

    public function text($name)
    {
        $this->columns[] =
            "$name TEXT";
    }

    public function boolean($name)
    {
        $this->columns[] =
            "$name BOOLEAN";
    }

    public function date($name)
    {
        $this->columns[] =
            "$name DATE";
    }

    public function float($name, $total = 8, $places = 2)
    {
        $this->columns[] =
            "$name FLOAT($total, $places)";
    }

    public function double($name, $total = 10, $places = 2)
    {
        $this->columns[] =
            "$name DOUBLE($total, $places)";
    }

    public function json($name)
    {
        $this->columns[] =
            "$name JSON";
    }

    public function timestamps()
    {
        $this->columns[] =
            "created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP";

        $this->columns[] =
            "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
             ON UPDATE CURRENT_TIMESTAMP";
    }

    public function enum($name, array $values)
    {
        $enumValues = "'" . implode("','", $values) . "'";

        $this->columns[] =
            "$name ENUM($enumValues)";
    }

    public function nullable()
    {
        if ($this->lastColumn !== null) {

            $this->columns[$this->lastColumn] =
                str_replace(
                    'NOT NULL',
                    'NULL',
                    $this->columns[$this->lastColumn]
                );
        }

        return $this;
    }

    public function unique()
    {
        if ($this->lastColumn !== null) {

            $this->columns[$this->lastColumn] .=
                " UNIQUE";
        }

        return $this;
    }

    public function foreignId($column)
    {
        $this->columns[] =
            "$column BIGINT UNSIGNED NOT NULL";

        $this->lastColumn =
            count($this->columns) - 1;

        return $this;
    }

    public function constrained($column, $table, $reference = 'id')
    {
        $this->foreignKeys[] =
            "FOREIGN KEY ($column)
         REFERENCES $table($reference)
         ON DELETE CASCADE";
    }

    public function toSql()
    {
        $all = array_merge(
            $this->columns,
            $this->foreignKeys
        );

        return implode(", ", $all);
    }
}
