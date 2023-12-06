<?php
    include __DIR__ . "/../../config/connection.php";

    function selectData($tableName, $columns = ['*'], $condition, $types ='') {
        global $connexion, $result;
    
        if (count($columns) > 1) {
            $columnsPart = implode(', ', $columns);
        } else {
            $columnsPart = reset($columns);
        }
    
        //For Conditions :
        $result = array_map(function ($key) { return "`$key` = ?";}, array_keys($condition));
        $wherePart = !empty($condition) ? "WHERE " . implode(' AND ', $result) : '';

        $stmt = $connexion->prepare("SELECT $columnsPart FROM $tableName $wherePart");

        if ($condition) {
            $stmt->bind_param($types, ...array_values($condition));
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
?>