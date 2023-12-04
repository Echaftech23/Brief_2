<?php 
    session_start();
    include "select.php";

    if(isset($_POST['submit'])){
        $data = [
            "email" => mysqli_real_escape_string($connexion, $_POST['email']),
            "password" => mysqli_real_escape_string($connexion, $_POST['password'])
        ];

        $result = selectData("users", ['username', 'email', 'password'], "email = ?", ['email' => $data['email']], $types ='s');

        //check if email exist  :
        if($result->num_rows === 1){
            $userData = $result->fetch_assoc();

            if(password_verify($data['password'], $userData['password'])){
                $_SESSION['auth'] = true;
                $_SESSION['auth_user'] = [
                    'username' => $userData['username'],
                    'email' => $userData['email']
                ];
                $_SESSION['message'] = "Logged In Successfully";
                header('Location: ../index.php');
            } 
            else {
                $_SESSION['message'] = "Incorrect Password";
                header('Location: ../authentication/login.php');
            }
        }
        else{
            $_SESSION['message'] = "Invalid Credentials";
            header('Location: ../authentication/login.php');
        }

        
    }
?>
