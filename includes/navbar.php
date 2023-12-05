<nav class="bg-black">
    <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center">
        <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
            <div class="logo"><img class="img-fluid" src="../assets/img/home-page/logo.png" alt="logo"></div>
            <div class="menu"><i class="fa-solid fa-bars fs-3 text-white"></i></div>
        </div>
        <div class="search-wrapper flex-grow-1">
            <input class="py-2 px-3 rounded-2 w-100 border-0 d-none d-md-block" type="text" placeholder="Search">
        </div>
        <div class="sign-in-wrapper d-flex align-items-center gap-3">
            <?php
            session_start();
            if (isset($_SESSION['auth'])) {
            ?>
                <a href="dashboard.php" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle fs-5 text-white" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                        <?= $_SESSION['auth_user']['username']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="dashboard.php">Your activity</a></li>
                        <li><a class="dropdown-item" href="favorite.php">Your watchlist</a></li>
                        <li><a class="dropdown-item" href="#">Account setings</a></li>
                        <li><a class="dropdown-item" href="../authentication/logout.php">Sign out</a></li>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <a href="login.php" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>
                <a href="login.php" class="fw-bold text-white d-none d-md-block">signIn</a>
            <?php
            }

            ?>
            <select class="form-select d-none d-md-block" aria-label="Default select example">
                <option selected>En</option>
                <option value="2">Fr</option>
                <option value="3">Sp</option>
            </select>

        </div>
    </div>
</nav>