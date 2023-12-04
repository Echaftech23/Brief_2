<?php
    // include __DIR__ . "../../../../htdocs/brief_2/config/connection.php";
    include __DIR__ . "/../config/connection.php";

    function insertData($tableName, $data, $types) {
        global $stmt, $connexion; 

        $symbols = implode(', ', array_fill(0, count($data), '?'));
        $columns = implode(', ', array_keys($data));

        $stmt = $connexion->prepare("INSERT INTO $tableName ($columns) VALUES ($symbols)");
        $stmt->bind_param("$types", ...array_values($data));
        $stmt->execute();

        return $stmt;
    }
?>