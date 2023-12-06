<!-- side nav -->
<div class="sidebar col-auto col-md-3 min-vh-100 ">
    <div class="side-content d-flex flex-column align-items-center  ">
        <div class="profil d-flex flex-column align-items-center gap-3">
            <img src="../assets/img/dashboard/user.png" alt="">
            <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <div class="nav-item dropdown">
                        <span class="d-none d-md-inline"><?= $_SESSION['auth_user']['username']; ?></span>
                    </div>
                <?php
                }
            ?>
        </div>
        <ul class="nav d-flex flex-column">
            <li>
                <a href="../admin/dashboard.php" class="text-decoration-none text-white px-4 py-2"><i class=" fa-solid fa-border-all"></i>
                <span class="d-none d-md-inline">Dashboard</span></a>
            </li>

            <li>
                <a href="#" class="text-decoration-none text-white px-4 py-2"><i class=" fa-regular fa-user"></i> <span class="d-none d-md-inline">Users</span></a>
            </li>

            <li><a href="favorite.php" class="text-decoration-none text-warning px-4 py-2"><i class=" fa-regular fa-heart"></i> <span class="d-none d-md-inline text-warning">Movies</span></a>
            </li>

            <li>
                <a href="../admin/watch-history.php" class="text-decoration-none text-white px-4 py-2"><i class=" fa-regular fa-compass"></i> <span class="d-none d-md-inline">Reports</span></a>
            </li>

            <li>
                <a href="#" class="text-decoration-none text-white px-4 py-2"><i class=" fa-regular fa-user"></i> <span class="d-none d-md-inline">Account</span></a>
            </li>

            <li>
                <a href="../authentication/logout.php" class="text-decoration-none text-white px-4 py-2">
                    <i class=" fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="d-none d-md-inline">Logout</span></a>
            </li>
        </ul>
    </div>
</div>