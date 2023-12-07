<?php

include('../../config/connection.php');

if(isset($_GET['search'])){
    $name = $_GET['search'];

    $name = '%' . $name . '%';

    $stmt = $connexion->prepare("SELECT * FROM users WHERE username LIKE ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    $users = array();

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    
    header('Content-Type: application/json');

    echo json_encode($users);
}