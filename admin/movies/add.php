<?php
include('config/connection.php');
include('functions/sql_functions/insert.php');
include('functions/sql_functions/select.php');

if (isset($_POST['submit'])) {
    // Image path handling :
    $filename = mysqli_real_escape_string($connexion, $_FILES['img_path']['name']);
    $tempfile = $_FILES['img_path']['tmp_name'];
    $folder = "../assets/img/dashboard/" . $filename;

    $data = [
        "title" => mysqli_real_escape_string($connexion, $_POST['title']),
        "description" => mysqli_real_escape_string($connexion, $_POST['description']),
        "duration" => mysqli_real_escape_string($connexion, $_POST['duration']),
        "image_path" => $filename
    ];
    // Insert function :
    $query =  insertData("movies", $data, 'ssis');

    if ($query) {
        move_uploaded_file($tempfile, $folder);
        echo "<h1>Added </h1>";
    }
}
// Sectect function :
$result = selectData("movies", ['*'], [], '');
