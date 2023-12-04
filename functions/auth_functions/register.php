<?php 
    session_start();
    include "../sql_functions/insert.php";
    include "../sql_functions/select.php";

    if(isset($_POST['submit'])){
        $data = [
            "username" => mysqli_real_escape_string($connexion, $_POST['username']),
            "email" => mysqli_real_escape_string($connexion, $_POST['email']),
            "password" => mysqli_real_escape_string($connexion, $_POST['password'])
        ];
        $cpassword = mysqli_real_escape_string($connexion, $_POST['cpassword']);
        //check if the user already registered using selsct function:
        $result = selectData("users", ['email'], "email = ?", ['email' => $data['email']], $types ='s');
        
        if($result->num_rows > 0){
            $_SESSION['message'] = "Email Already Registered";
            header('Location: ../../authentication/register.php');
        }
        else{
            if($data["password"] == $cpassword){
                //Call insert function :
                $data["password"] = password_hash(mysqli_real_escape_string($connexion, $_POST['password']), PASSWORD_BCRYPT);
                $stmt = insertData("users", $data, "sss");

                if($stmt->affected_rows > 0){
                    $_SESSION['message'] = "Registered Successfully";
                    header('Location: ../../authentication/login.php');
                }
                else{
                    $_SESSION['message'] = "Somthing went wrong";
                    header('Location: ../../authentication/.php');
                }
            }
            else{
                $_SESSION['message'] = "Password do not match";
                header('Location: ../../authentication/register.php');
            }
        }
    }
?>