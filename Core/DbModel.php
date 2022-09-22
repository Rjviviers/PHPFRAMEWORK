<?php

namespace App\Core;

abstract class DbModel extends Model
{
    abstract public function tableName(): string;

    abstract public function attributes(): array;


    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $values = Array();

        foreach ($attributes as $attribute) {
            array_push($values, [$attribute  => $this->{$attribute}]);
        }
        var_dump($values);
        $statement = self::prepare("INSERT INTO $tableName (" . implode(',', array_keys($values)) . ") VALUES (" . implode(',', array_values($values)) . ")");
        var_dump($statement);
    }


    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}