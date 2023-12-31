<?php     
    include('../includes/navbar.php');
    if(!isset($_SESSION['isAdmin'])){

        $_SESSION['message'] = "You are not authorised to access this page";
        header('Location: ../index.php');
        exit();
    }
?>
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
    <style>
    .swiper-wrapper {
        height: auto;
    }
    </style>
</head>

<body class=" bg-black">
    <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center position-relative">
        <div class="d-none">
            <div class="logo"><img class="img-fluid" src="assets/img/logo.png d-none" alt="logo"></div>
            <div class="menu"><i class="fa-solid fa-bars burger-menu fs-3 text-white d-none"></i></div>
        </div>
    </div>
    <section class="container">
        <div class="row flex-nowrap">
            
            <?php include("../includes/admin-sidebar.php"); ?>
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
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/charts.js"></script>
</body>

</html>