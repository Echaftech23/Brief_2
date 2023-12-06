<?php
    include __DIR__ . "/../../config/connection.php";

    function updateData($tableName, $data, $condition, $types = ''){
        global $connexion;

        //For data :
        $columns = array_map( function ($key){ return "`$key`= ?";}, array_keys($data));
        $setPart = implode(', ', $columns);

        //For Conditions :
        $result = array_map(function ($key) { return "`$key` = ?";}, array_keys($condition));
        $conditionPart = !empty($condition) ? "WHERE " . implode(' AND ', $result) : '';

        $stmt = $connexion->prepare("UPDATE $tableName SET $setPart  $conditionPart");

        $array =  array_merge(array_values($data), array_values($condition));
        $stmt->bind_param($types, ...$array);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result;
    }

?>
