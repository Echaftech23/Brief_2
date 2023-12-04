<?php
    include __DIR__ . "/../config/connection.php";

    function selectData($tableName, $columns = ['*'], $condition = '', $data, $types ='') {
        global $connexion, $result;
    
        if (count($columns) > 1) {
            $columnsPart = implode(', ', $columns);
        } else {
            $columnsPart = reset($columns);
        }
    
        $wherePart = $condition ? "WHERE $condition" : '';
        $stmt = $connexion->prepare("SELECT $columnsPart FROM $tableName $wherePart");
    
        if ($condition) {
            $stmt->bind_param($types, ...array_values($data));
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
?>