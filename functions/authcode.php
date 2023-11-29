<?php 
    session_start();
    include('../config/connection.php');

    if(isset($_POST['register_btn'])){
        $name = mysqli_real_escape_string($connexion, $_POST['username']);
        $email = mysqli_real_escape_string($connexion, $_POST['email']);
        $password = mysqli_real_escape_string($connexion, $_POST['password']);
        $cpassword = mysqli_real_escape_string($connexion, $_POST['cpassword']);

        //check if the user already registered :
        $check_email_query = "SELECT email FROM `users` WHERE email = '$email'";
        $check_email_query_run = mysqli_query($connexion, $check_email_query);
        
        if(mysqli_num_rows($check_email_query_run) > 0){
            $_SESSION['message'] = "Email Already Registered";
            header('Location: ../authentication/register.php');
        }
        else{
            if($password == $cpassword){
                $insert_query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$name', '$email', '$password')";
                $insert_query_run = mysqli_query($connexion, $insert_query); 
    
                if($insert_query_run){
                    $_SESSION['message'] = "Registered Successfully";
                    header('Location: ../authentication/login.php');
                }
                else{
                    $_SESSION['message'] = "Somthing went wrong";
                    header('Location: ../authentication/register.php');
                }
            }
            else{
                $_SESSION['message'] = "Password do not match";
                header('Location: ../authentication/register.php');
            }
        }
    }
    else if(isset($_POST['login_btn'])){
        $email = mysqli_real_escape_string($connexion, $_POST['email']);
        $password = mysqli_real_escape_string($connexion, $_POST['password']);
        //check if the user already registered :
        $login_query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
        $login_query_run = mysqli_query($connexion, $login_query);
        
        if(mysqli_num_rows($login_query_run) > 0){
            $_SESSION['auth'] = true;
            $userdata = mysqli_fetch_array($login_query_run);
            $username = $userdata['username'];
            $useremail = $userdata['email'];

            $_SESSION['auth_user'] = [
                'username' => $username,
                'email' => $useremail
            ];
            $_SESSION['message'] = "Logged In Successefully";
            header('Location: ../index.php');
        }
        else{
            $_SESSION['message'] = "Invalid Credentials";
            header('Location: ../authentication/login.php');
        }
        
    }
?>