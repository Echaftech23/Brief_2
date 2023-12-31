<?php include('admin/movies/add.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>

    <style>
        .custom-alert {
            position: absolute;
            top: 13%;
            right: 5.5%;
            z-index: 100;
        }

        div::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <nav class="bg-black">
        <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center">
            <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
                <div class="logo"><img class="img-fluid" src="assets/img/home-page/logo.png" alt="logo"></div>
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
                    <a href="users/dashboard.php" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-circle-user  fs-5"> </i> <span class="fs-6"><?= $_SESSION['auth_user']['username']; ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="dashboard.php">Your activity</a></li>
                            <li><a class="dropdown-item" href="favorite.php">Your watchlist</a></li>
                            <li><a class="dropdown-item" href="#">Account setings</a></li>
                            <li><a class="dropdown-item" href="authentication/logout.php">Sign out</a></li>
                        </ul>
                    </div>
                <?php
                } else {
                ?>
                    <a href="authentication/login.php" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>
                    <a href="authentication/signin_choice.php" class="fw-bold text-white d-none d-md-block">signIn</a>
                <?php
                }

                ?>
                <!-- alert message -->
                <?php
                if (isset($_SESSION['message'])) { ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-5 offset-5 custom-alert">
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    unset($_SESSION['message']);
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
    <section class="hero py-4">
        <div class="container row mx-auto">
            <div class="slider col-xl-7 p-0">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <!-- 1 -->
                        <div class="carousel-item active">
                            <img src="assets/img/home-page/hero-bg-1.png" class="d-block w-100" alt="img">
                            <div class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="assets/img/home-page/casaDePapel.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>La Casa de papel</h3>
                                    <span class="opacity-75 fw-bold">2:19</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="carousel-item">
                            <img src="assets/img/home-page/hero-bg-5.png" class="d-block w-100" alt="img">
                            <div class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="assets/img/home-page/hero-5.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>King Kong</h3>
                                    <span class="opacity-75 fw-bold">1:50</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home-page/hero-bg-6.png" class="d-block w-100" alt="img">
                            <div class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="assets/img/home-page/hero-6.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>Avatar 2020</h3>
                                    <span class="opacity-75 fw-bold">2:12</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home-page/hero-bg-4.png" class="d-block w-100" alt="img">
                            <div class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="assets/img/home-page/hero-4.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>spider man no way home</h3>
                                    <span class="opacity-75 fw-bold">2:33</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                        <!-- <span class="visually-hidden">Previous</span> -->
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                        <!-- <span class="visually-hidden">Next</span> -->
                    </button>
                </div>
            </div>
            <div class="col-5 up-coming-movies d-none d-xl-block p-2">
                <h3 class="main-clr fw-bold">Up next</h3>

                <div class="bg-card d-flex text-white">
                    <img src="assets/img/home-page/hero-1.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3  pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:35</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Kraven</h5>
                        <p class="card-text opacity-75">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

                <div class="bg-card d-flex my-2 text-white">
                    <img src="assets/img/home-page/hero-2.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3 pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:44</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Spider-Man</h5>
                        <p class="card-text opacity-75">build on the card and make up the bulk of content.</p>
                    </div>
                </div>

                <div class="bg-card d-flex text-white">
                    <img src="assets/img/home-page/hero-3.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3 pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:10</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Short Comings</h5>
                        <p class="card-text opacity-75">Some quick example make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="fearures py-5">
        <div class="container">
            <div class="main-heading">
                <h1>Featured today</h1>
            </div>
        </div>
        <div id="carouselExamples" class="carousel slide mt-4 container">
            <div class="carousel-inner container">
                <!-- 1 -->
                <div class="carousel-item active">
                    <div class="d-flex">
                        <div class="w-33">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-1.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-2.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="w-33 mx-3">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-3.jpg" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="assets/img/home-page/top-new-2.jpg" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-4.jpg" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="w-33">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-1.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="assets/img/home-page/featur-2.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
                <!-- 2 -->
                <div class="carousel-item">
                    <div class="d-flex">
                        <div class="w-33">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-4.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-5.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-6.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="w-33 mx-3">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-7.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="assets/img/home-page/featur-8.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-9.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="w-33">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-10.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="assets/img/home-page/featur-11.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-12.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
                <!-- 3 -->
                <div class="carousel-item">
                    <div class="d-flex">
                        <div class="w-33">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-12.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-13.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="w-33 mx-3">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-12.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="assets/img/home-page/featur-6.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-13.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="w-33">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-8.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="assets/img/home-page/featur-1.png" alt="img">
                                <img class="w-33 flex-grow-1" src="assets/img/home-page/featur-7.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamples" data-bs-slide="prev">
                <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExamples" data-bs-slide="next">
                <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="halloween py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    halloween picks
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    Our Halloween guide has treats for all.
                </p>
            </div>
            <div id="carouselExampl" class="carousel slide mt-4">
                <div class="carousel-inner container">
                    <!-- 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-6.jpg" alt="img">
                                </div>
                                <div class="text">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Custume Inspiration for 2023
                                    </span>
                                </div>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-5.jpeg" alt="img">
                                </div>
                                <div class="text">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Avatar 2022
                                    </span>
                                </div>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Rath of man 2021
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-3.jpg" alt="img">
                                    <img class="w-33 flex-grow-1 mx-" src="assets/img/home-page/top-new-2.jpg" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-4.jpg" alt="img">
                                </div>
                                <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1 mx-1" src="assets/img/home-page/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Best 3 of picks in October</p>
                            </div>
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-3.jpg" alt="img">
                                    <img class="w-33 flex-grow-1 mx-" src="assets/img/home-page/top-new-2.jpg" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/top-new-4.jpg" alt="img">
                                </div>
                                <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1 mx-1" src="assets/img/home-page/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Best 3 of picks in October</p>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampl" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampl" data-bs-slide="next">
                    <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="news py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    top news
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
            </div>
        </div>
        <div id="carousel" class="carousel slide container">
            <div class="carousel-inner container mt-4 ">
                <div class="carousel-item active">
                    <div class="d-flex gap-3">
                        <!-- card 1-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3">
                        <!-- card 1-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3">
                        <!-- card 1-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/home-page/movie-1.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span class="ms-4">The Wrap</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-white container mt-4">
            <span class="rounded-4 py-1 px-3 border d-inline-block">top news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">movie news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">TV news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">celebrity news</span>
        </div>
    </section>

    <section class="coming-soon py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    Coming soon to theaters
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    Our Halloween guide has treats for all.
                </p>
            </div>
            <div id="coming-soon" class="carousel slide mt-4">
                <div class="carousel-inner container">
                    <!-- 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="carousel-item">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="carousel-item">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="assets/img/home-page/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#coming-soon" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#coming-soon" data-bs-slide="next">
                    <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <?php echo isset($_SESSION['auth']) ? '' :
        '<section class="py-5">
            <div class="container text-center">
                    
                <a href="authentication/login.php" class="d-inline-block rounded 
                fw-bold py-2 px-5 fs-7 bg-main text-black">
                Sign in for more access
                </a>         

            </div>
        </section>';
    ?>

    <?php if (isset($_SESSION['auth'])) {
    ?>

        <?php echo ' <section class="more-to-watch py-5">
            <div class="container">
                <div class="main-heading container">
                    <h2>
                        From your Watchlist
                        <i class="fa-solid fa-angle-right"></i>
                    </h2>
                    <p class="opacity-50">
                        Movies and TV shows that you have watchlisted
                    </p>
                </div>
                <div id="watchlist" class="carousel slide mt-4">
                    <div class="carousel-inner container">
                        <div class="g-2 al d-flex align-items-center overflow-x-auto">
                '; 
        ?>

    <?php while ($rows = mysqli_fetch_assoc($result)) {
    ?>

        <!-- Carousel Items -->

        <?php echo '<div class=" me-3 text-white car-item">
            <div class="d-flex gap-1 bg-light">
                <img class="flex-grow-1" src="assets/img/dashboard/' . $rows['image_path'] . '" width="180px" height="220px" alt="img">
            </div>
            <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                <i class="fa-regular fa-bookmark fs-3"></i>
                <div class="d-inline-block">
                    <p class="m-0 opacity-75">' . $rows['duration'] . ' min</p>
                    <p class="m-0">' . $rows['title'] . '</p>
                </div>
            </div>
        </div>';
    }
    ?>

    </div>
    </div>
    <button class="carousel-control-prev prev" type="button" data-bs-target="#watchlist" data-bs-slide="prev">
        <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next next" type="button" data-bs-target="#watchlist" data-bs-slide="next">
        <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    </div>
    </section>

    <?php
    }
    ?>

    <footer class="py-5 mt-5 bg-black">
        <div class="container">
            <div class="social-media text-white fs-1 d-flex justify-content-center gap-4 mb-5">
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="mt-5 row">
                <div class="col-sm-12 col-lg-3 d-flex d-lg-block flex-column align-items-center">
                    <div>
                        <img src="assets/img/logo.png" alt="logo" style="min-width: 100px;">
                    </div>
                    <p class="opacity-75 fs-7">Terms of use | Privacy</p>
                    <p class="opacity-75 fs-7">Copyright by 2019 MovieMingle, Inc</p>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-2">About Us</li>
                        <li><a href="#" class="text-white">help Center</a></li>
                        <li><a href="#" class="text-white">Customer Support</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Copyright</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-2">Our Information</li>
                        <li><a href="#" class="text-white">Return Policy</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-white">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3 d-none d-lg-block">
                    <ul class="text-white">
                        <li class="fw-bold mb-2">Our Information</li>
                        <li><a href="#" class="text-white">Return Policy</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-white">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardItems = document.querySelectorAll('.car-item');
            const spans = document.querySelectorAll('.next, .prev');

            let currentIndex = 0;

            if (cardItems.length <= 3) {
                spans[0].style.display = 'none';
                spans[1].style.display = 'none';
            }

            const showItems = () => {
                for (let i = 0; i < cardItems.length; i++) {

                    if (i >= currentIndex && i < currentIndex + 3) {
                        cardItems[i].style.display = 'block';
                    } else {
                        cardItems[i].style.display = 'none';
                    }
                }
            };

            spans[1].onclick = () => {
                currentIndex = (currentIndex + 1) % cardItems.length;
                showItems();
            };

            spans[0].onclick = () => {
                currentIndex = (currentIndex - 1 + cardItems.length) % cardItems.length;
                showItems();
            };

            showItems();
        });
    </script>
</body>

</html>