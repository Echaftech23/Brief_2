<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and curate your all-time favorites here. These are the films and
        shows
        that have left a mark on you">
    <title>Favorite</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- file css -->
    <link rel="stylesheet" href="../assets/css/favorite.css">
    <!-- bootstrap js -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <!-- file js -->
    <script src="../assets/js/favorite.js" defer></script>
</head>

<body class=" bg-black">
    <?php include('../includes/navbar.php') ?>

    <section class="container">
        <div class="row flex-nowrap">
            <!-- pop up -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog text-black">
                    <div class="modal-content">
                        <div class="modal-header bg-white ">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Movie To Home page:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-white ">
                            <!-- the form -->
                            <form method="POST" action="add.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Title:</label>
                                    <input type="text" name="title" class="form-control" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea name="description" class="form-control" id="message-text" style="resize: none;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Duration:</label>
                                    <input type="text" name="duration" class="form-control " id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Upload Image:</label>
                                    <input type="file" name="img_path" accept="image/*" required>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary bg-warning text-black " data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn bg-black text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('../includes/admin-sidebar.php') ?>

            <!-- content -->
            <div class="content d-flex flex-column align-items-center gap-5 m-1 col-md-9 col-9 min-vh-100 p-2 p-md-5">
                <div class="col-lg-11">
                    <h1 class="title fs-5">List of Movies you have added</h1>
                </div>

                <div id="carouselExample" class="carousel slide w-100">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-lg-11 col-12 d-flex align-items-center">
                                <div class="col-4  d-flex flex-column gap-2">
                                    <div>
                                        <img class="image" src="../assets/img/dashboard/sweet-home-netflix-official-poster-v6u2gphttdtpyt5p.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Sweet home</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/anne.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Anne With An E</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img class="image" src="../assets/img/dashboard/kingdom.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Kingdom</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-11 col-12 d-flex align-items-center">
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/black.png" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Black Panther</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/raya.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Raya</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/squid.png" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Squid game</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-11 d-flex align-items-center">
                                <div class="col-4 d-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/chernobyl.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Chernobyl</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/stranger.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Stranger things</span>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-flex flex-column gap-2">
                                    <div>
                                        <img src="../assets/img/dashboard/sweet-home-netflix-official-poster-v6u2gphttdtpyt5p.jpg" width="270" height="400" alt="">
                                    </div>
                                    <div class="text-white d-flex justify-content-around">
                                        <span>Past Lives</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon border" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon border" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <button type="button" class="btn btn-outline-light mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to favorite</button>
                <?php
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '
                                <div class="movies-container d-flex align-items-start">
                                    <div class="-image-item">
                                        <img src="../assets/img/dashboard/' . $rows['image_path'] . '" alt="movie image" width="130px" height="200px">
                                    </div>
                                    
                                    <div class="item-content text-white ms-4">
                                        <div class="item-header">
                                            <h3><a href="#" class="movie-title text-white">' . $rows['title'] . '</a></h3>
                                        </div>
                                        <p><span>' . $rows['duration'] . '</span> min</p>
                                        <div class="item-description">
                                            <p>The fractured domestic lives of a nihilistic mad scientist and his anxious grandson are further complicated by their inter-dimensional misadventures.</p>
                                        </div>
                                        <div class="user-description">
                                            <p class="description">' . $rows['description'] . '</p>
                                        </div>
                                        <form method="POST">
                                            <a href="edit.php?id=' . $rows['id'] . '" class="btn btn-outline-light mt-5">Edit</a>
                                            <a href="delete.php?id=' . $rows['id'] . '" class="btn  btn btn-warning mt-5">Delete</a>
                                        </form>
                                    </div>
                                </div>
                            ';
                    }
                ?>

            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>