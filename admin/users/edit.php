<?php
    include ('../functions/sql_functions/update.php');
    // include ('../functions/sql_functions/select.php');

    if(isset($_POST['update'])){

        $data = [
            "username" => mysqli_real_escape_string($connexion, $_POST['username']),
            "email"=> mysqli_real_escape_string($connexion, $_POST['email']),
            "password"=> mysqli_real_escape_string($connexion, $_POST['password']),
            "role"=> mysqli_real_escape_string($connexion, $_POST['role']),
        ];
        
        $data["password"] = password_hash(mysqli_real_escape_string($connexion, $_POST['password']), PASSWORD_BCRYPT);
        $condition = ["id" => mysqli_real_escape_string($connexion, $_POST['id'])];

        $result = updateData( 'users', $data, $condition, "ssssi");

        if (isset($result)){
            header('location:user.php');
        }
    }
?>