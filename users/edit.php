<?php
    include ('../functions/sql_functions/update.php');
    include ('../functions/sql_functions/select.php');

    if(isset($_POST['update'])){

        // Image path handling :
        $filename = mysqli_real_escape_string($connexion, $_FILES['img_path']['name']);
        $tempfile = $_FILES['img_path']['tmp_name'];
        $folder = "../assets/img/dashboard/" . $filename;

        $data = [
            "title" => mysqli_real_escape_string($connexion, $_POST['title']),
            "description"=> mysqli_real_escape_string($connexion, $_POST['description']),
            "duration"=> mysqli_real_escape_string($connexion, $_POST['duration']), 
            "image_path"=> $filename
        ];
        $condition = ["id" => mysqli_real_escape_string($connexion, $_POST['id'])];

        $result = updateData( 'movies', $data, $condition, "ssisi");

        if (isset($result)){
            move_uploaded_file($tempfile , $folder);
            header('location:favorite.php');
        }
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

    <section class="container m-5">
        <div class="row justify-content-center">
            <?php include('../includes/sidebar.php') ?>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="fs-5">Edit Favorite Movie:</h1>
                    </div>
                    <div class="card-body">
                        <!-- the form -->
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <?php

                                if (isset($_GET['id'])){
                                    $condition = [ "id" => mysqli_real_escape_string($connexion , $_GET['id'])];
                                    $result = selectData("movies", ['*'], $condition, 's');

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $duration = $row['duration'];
                                            $id = $row['id'];
                                        }
                                    }
                                }
                            ?>
                            
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" name="title" class="form-control" id="recipient-name" value="<?php echo $title; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea name="description" class="form-control" id="message-text" style="resize: none;"><?php echo $description; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Duration:</label>
                                <input type="text" name="duration" class="form-control " id="recipient-name" value="<?php echo $duration; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Upload Image:</label>
                                <input type="file" name="img_path" accept="image/*">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="update" class="btn bg-black text-white">Update movie</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
