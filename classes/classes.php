<?php
    class DatabaseTable{
        private $table;
        function __construct($table){
            $this->table = $table;
        }

        function findAll(){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table");
            $stmt->execute();
            return $stmt;
        }

        function find($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field =:value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }
    }


?>