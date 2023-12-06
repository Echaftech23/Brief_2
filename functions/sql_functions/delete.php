<?php
    include __DIR__ . "/../../config/connection.php";

    function deleteData($tableName, $condition, $types = ''){
        global $connexion;

        //For Conditions :
        $result = array_map(function ($key) { return "`$key` = ?";}, array_keys($condition));
        $conditionPart = !empty($condition) ? "WHERE " . implode(' AND ', $result) : '';

        $stmt = $connexion->prepare("DELETE FROM $tableName $conditionPart");

        $stmt->bind_param($types, ...array_values($condition));
        $stmt->execute();

        $result = $stmt->get_result();
        return $result;
    }

?>
