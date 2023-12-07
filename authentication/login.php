<?php     
    include('../includes/navbar.php');
    if(isset($_SESSION['auth'])){
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);

        $_SESSION['message'] = "You Already  Logged In";
        header('Location: ../index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login In page</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- file js-->
    <script src="../assets/js/register.js" defer></script>
    <script src="../assets/js/bootstrap.bundle.min.js" defer></script>

</head>

<body>
<section class="sign-up sign-in d-flex justify-content-center align-items-center">
        <div class="sign-up-container">
            <?php 
                if(isset($_SESSION['message']))
                { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
            <h1 class="text-center">Login in</h1>
            <form method="POST" action="../functions/auth_functions/login.php" id="form">
                <label for="form-email">Email</label>
                <div class="form-controls">
                    <input type="text" name="email" id="form-email" placeholder="Enter Your Email" class="input-pd">
                    <small>Error message</small>
                </div>
    
                <label for="form-password">Password</label>
                <div class="form-controls">
                    <input type="password" name="password" id="form-password" placeholder="Enter Your password" class="input-pd">
                    <p class="form-control-caracter d-none">Enter Your password</p>
                    <small>Error message</small>
                </div>
                <button id="submit" name="submit">Sign in</button>
            </form>
            <p class="signin-link">Don't have an account?<a href="register.php"> Sign up</a></p>
        </div>
    </section>
    <?php include ('../includes/footer.php'); ?>
</body>
</html>