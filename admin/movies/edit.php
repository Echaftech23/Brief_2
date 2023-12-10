<?php
include('../functions/sql_functions/delete.php');

if (isset($_GET['id'])) {
    $condition = ["id" => mysqli_real_escape_string($connexion, $_GET['id'])];
    // call delete query function :
    $result = deleteData("users", $condition, $types = 'i');
    header('location: user.php');
}
