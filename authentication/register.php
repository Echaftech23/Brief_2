<?php
    if (isset($_SESSION['auth'])) {

        $_SESSION['message'] = "You are Already Logged In ";
        header('Location: ../index.php');
        exit();
    }
    include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up page</title>

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
        <section class="sign-up d-flex justify-content-center align-items-center">
            <div class="sign-up-container">
                <?php
                    if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <h1 class="text-center">Create account</h1>
                <form method="post" action="../functions/authcode.php" id="form">
                    <label for="form-username">Your Name</label>
                    <div class="form-controls">
                        <input type="text" name="username" id="form-username" placeholder="Your First and last name" class="input-pd">
                        <small>Error message</small>
                    </div>

                    <label for="form-email">Email</label>
                    <div class="form-controls">
                        <input type="text" name="email" id="form-email" placeholder="Your Email" class="input-pd">
                        <small>Error message</small>
                    </div>

                    <label for="form-password">Password</label>
                    <div class="form-controls">
                        <input type="password" name="password" id="form-password" placeholder="at least 8 characters" class="input-pd">
                        <p class="form-control-caracter">Passwords must be at least 8 characters</p>
                        <small>Error message</small>
                    </div>

                    <label for="form-confirmed-password">Re-enter password</label>
                    <div class="form-controls">
                        <input type="password" name="cpassword" id="form-confirmed-password" class="input-pd">
                        <small>Error message</small>
                    </div>
                    <button type="submit" id="submit" name="register_btn">Create your MovieMingle account</button>
                </form>
                <p class="signin-link">Already have an account? <a href="signin_choice.php">Sign in</a></p>
            </div>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
