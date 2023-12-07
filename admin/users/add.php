<?php
    include('../../config/connection.php');
    include('../../functions/sql_functions/insert.php');
    include('../../functions/sql_functions/select.php');

    if (isset($_POST['submit'])) {

        $data = [
            "username" => mysqli_real_escape_string($connexion, $_POST['username']),
            "email"=> mysqli_real_escape_string($connexion, $_POST['email']),
            "password"=> mysqli_real_escape_string($connexion, $_POST['password']),
            "role"=> mysqli_real_escape_string($connexion, $_POST['role']),
        ];
        $data["password"] = password_hash(mysqli_real_escape_string($connexion, $_POST['password']), PASSWORD_BCRYPT);
        // Insert function :
        $query =  insertData("users", $data, 'ssss');
        $result = selectData("users", ['email'], ['email' => $data['email']], $types ='s');
        
        if($result->num_rows > 0){
            $_SESSION['message'] = "Email Already Registered";
            header('Location: user.php');
        }

        if ($query){
            echo "<h1>Added </h1>";
            // header("location: user.php");
        } 
    }
    // Sectect function :
    $result = selectData("users", ['*'], [], '');


?>