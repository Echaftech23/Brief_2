<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in page</title>

        <!-- bootstrap css -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="../assets/css/login.css">    

        <!-- font-awesome css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- bootstrap js -->
        <script src="../assets/js/bootstrap.bundle.min.js" defer></script>

        <!-- file js -->
        <script src="../assets/js/signin.js" defer></script>
    </head>
    <body>

    <?php include ('../includes/navbar.php'); ?>

    <section class="sign-in">
        <div class="container d-flex">
            <div class="signin-options">
                <div class="col-xl-8 col-sm-10">
                    <h1 class="text-center fw-bold">Sign in</h1>
                    <div class="sign-in-items">
                        <a href="login.php"  class="sign-in-item d-flex align-items-center">
                            <span class="sign-in-icons item-logo MovieMingle-logo"></span>
                            <span class="signin-item-text">Sign in with MovieMingle</span>
                        </a>

                        <a href="login.php" class="sign-in-item d-flex align-items-center">
                            <span class="sign-in-icons item-logo amazon-logo"></span>
                            <span class="signin-item-text">Sign in with Amazon</span>
                        </a>

                        <a href="login.php" class="sign-in-item d-flex align-items-center">
                            <span class="sign-in-icons item-logo google-logo"></span>
                            <span class="signin-item-text">Sign in with Google</span>
                        </a>

                        <a href="login.php" class="sign-in-item d-flex align-items-center">
                            <span class="sign-in-icons item-logo apple-logo"></span>
                            <span class="signin-item-text">Sign in with Apple</span>
                        </a>
                        <div id="hiddenOptionToggle" class="item-option-toggle">
                            <span>Show more options</span>
                        </div>
                        <div id="hiddenItemOptionContainer" class="hidden-item-container d-none">
                            <a href="login.php" class="sign-in-item d-flex align-items-center">
                                <span class="sign-in-icons item-logo facebook-logo"></span>
                                <span class="signin-item-text">Sign in with Facebook</span>
                            </a>
                        </div>
                        <div class="divider-text">
                            <span>or</span>
                        </div>
                        <div class="create-account-container">
                            <a href="register.php" class="create-account fw-bold">Create a New Account</a>
                        </div>
                    </div>
                </div>
                <div id="signin-notice">
                    <p class="text-center">
                        <small>By signing in, you agree to MovieMingle's <a href="/conditions">Conditions<br> of Use</a>  and <a href="/privacy">Privacy Policy.</a></small>
                    </p>
                </div>
            </div>
            <div class="signin-perks">
                <h2 class="benfits-title">Benefits of your free  MovieMingle account</h2>
                <div class="benifits-content">
                    <h3 class="benfits-subtitle">Personalized Recommendations</h3>
                    <p class="benifits-description">Discover shows you'll love.</p>
                </div>

                <div class="benifits-content">
                    <h3 class="benfits-subtitle">Your Watchlist</h3>
                    <p class="benifits-description">
                        Track everything you want to watch and receive e-mail when 
                        movies open in theaters.
                    </p>
                </div>

                <div class="benifits-content">
                    <h3 class="benfits-subtitle" >Your Ratings</h3>
                    <p class="benifits-description">Rate and remember everything you've seen.</p>
                </div>

                <div class="benifit-content">
                    <h3 class="benfits-subtitle">Contribute to MovieMingle</h3>
                    <p class="benifits-description">
                        Add data that will be seen by millions of people and get cool 
                        badges.
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <?php include ('../includes/footer.php'); ?>

</body>
</html>