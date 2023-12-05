<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>dashboard</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- file js-->
    <script src="../assets/js/bootstrap.bundle.min.js" defer></script>

</head>

<body class=" bg-black">
    <?php include('../includes/navbar.php'); ?>
    <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center position-relative">
        <div class="d-none">
            <div class="logo"><img class="img-fluid" src="assets/img/logo.png d-none" alt="logo"></div>
            <div class="menu"><i class="fa-solid fa-bars burger-menu fs-3 text-white d-none"></i></div>
        </div>
    </div>
    <section class="container">
        <div class="row flex-nowrap">
            <!-- side nav -->
            
            <?php include('../includes/sidebar.php'); ?>
            
            <!-- content -->
            <div class="content m-1 p-md-4 col-md-9 col-9 min-vh-100">

                <!-- doughnut charts -->

                <div class="doughnut  p-3 rounded-4 d-flex flex-column gap-5">
                    <h1 class="title fs-5">Most Watched-genre</h1>
                    <div class="row d-flex flex-wrap">
                        <div class="col-lg-3 col-md-6 pb-1">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6  pb-2">
                            <canvas id="myChart1"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-1">
                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-3">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>

                <!-- liner charts -->

                <div class="row p-3 d-flex gap-3 justify-content-between">
                    <div class="linech rounded-4 col-lg-6">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="linech rounded-4 col-lg-5">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- reviews swiper -->

                <div class="swiper mySwiper p-2 rounded-4">
                    <h1 class="title p-2 fs-5">Your reviews</h1>
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="../assets/img/dashboard/user.png" alt="">
                                    <div>
                                        <?php
                                            if (isset($_SESSION['auth'])) {
                                            ?>
                                                <div class="nav-item dropdown">
                                                    <span class="d-none d-md-inline"><?= $_SESSION['auth_user']['username']; ?></span>
                                                </div>
                                            <?php
                                            }
                                        ?>
                                        <i class=" fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“I have no idea why Rob Reiner, or anyone else, wanted to make this story into a
                                        movie, and close examination of the film itself is no help.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="../assets/img/dashboard/user.png" alt="">
                                    <div>
                                        <?php
                                            if (isset($_SESSION['auth'])) {
                                            ?>
                                                <div class="nav-item dropdown">
                                                    <span class="d-none d-md-inline"><?= $_SESSION['auth_user']['username']; ?></span>
                                                </div>
                                            <?php
                                            }
                                        ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“Honestly, the worst thing about Black Panther is that it had to be released in
                                        2018
                                        and not during the term of America’s first black president.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="feed" class="feedback bg-white d-flex flex-column rounded p-3 w-50 mx-auto">
                                <div class="d-flex gap-2">
                                    <img src="../assets/img/dashboard/user.png" alt="">
                                    <div>
                                        <?php
                                            if (isset($_SESSION['auth'])) {
                                            ?>
                                                <div class="nav-item dropdown">
                                                    <span class="d-none d-md-inline"><?= $_SESSION['auth_user']['username']; ?></span>
                                                </div>
                                            <?php
                                            }
                                        ?>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <p>“Christopher Nolan's complex, vivid portrait of J. Robert Oppenheimer, the
                                        “father
                                        of the atomic bomb,” is a brilliant achievement in formal and conceptual terms”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="swipers1" class="swiper-button-next text-white"></div>
                    <div id="swipers2" class="swiper-button-prev text-white "></div>
                    <div class="swiper-pagination "></div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/charts.js"></script>
</body>

</html>