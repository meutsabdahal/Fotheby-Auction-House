<?php
    class DatabaseTable{
        private $table;
        function __construct($table){
            $this->table = $table;
        }

        function save($record, $pk=''){
            try {
                $this->insert($record);

            } catch (Exception $e) {
                $this->update($record, $pk);
            }
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

        function insert($record){
            global $pdo;
            $keys = array_keys($record);
            $keyswithComma = implode(',', $keys);
            $keyswithCommaColon = implode(',:',$keys);
            $stmt = $pdo->prepare("INSERT INTO $this->table($keyswithComma) VALUES(:$keyswithCommaColon)");
            $stmt->execute($record);
            
        }

        function update($record, $pk){
            global $pdo;
            $para = [];
            foreach($record as $key => $value){
                $para[] = $key.'= :'.$key;
            }
            $paraString = implode(',',$para);
            $stmt = $pdo->prepare("UPDATE $this->table SET $paraString WHERE $pk = :pk");
            $record['pk'] = $record[$pk];
            if($stmt->execute($record)){
                return true;
            } 
            else
                return false;
        }

        function delete($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        function findOrderBy($field, $value, $field2){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field =:value ORDER BY $field2 DESC");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        function joinTable($table2,$value,$value2){
            global $pdo;
            $stmt = $pdo->prepare("SELECT $this->table.*, $table2.* FROM $this->table JOIN $table2 ON 
            $this->table.$value = $table2.$value2");
            $stmt->execute();
            return $stmt;
        }


        function joinThreeTableCondition($table2,$value, $value2, $table3, $value3 , $value4, $field, $value5){
            global $pdo;
            $stmt = $pdo->prepare("SELECT $this->table.*, $table2.*, $table3.* FROM $this->table JOIN $table2 ON 
                $this->table.$value = $table2.$value2 JOIN $table3 ON $table2.$value3 = $table3.$value4 WHERE $table2.$field = :value5");
            $criteria = [
                "value5" => $value5
            ];  
            $stmt->execute($criteria);
            return $stmt;
        }

        
        function countRow(){
            global $pdo;
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM $this->table");
            $stmt->execute();
            return $stmt;
        }
        
        function countRowCondition($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM $this->table WHERE $field =:value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }
        
              
        function updateStatus($field, $field2, $value2){
            global $pdo;
            $stmt = $pdo->prepare("UPDATE $this->table SET $field = 1 WHERE $field2 = :value2");
            $criteria = [
                "value2" => $value2 
            ];
            $stmt->execute($criteria);
            return $stmt;
        }



    }


?>

