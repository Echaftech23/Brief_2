<?php
    include('users/add.php');
    include('users/delete.php');
    // include('users/edit.php');
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
    <!-- <?php include('../includes/navbar.php') ?> -->

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
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Password:</label>
                                    <input type="password" name="Password" class="form-control " id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Role:</label>
                                    <select name="role" class="form-select" aria-label="Default select example">
                                        <option selected value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
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
                <div class="col-lg-12">
                    <button type="button" class="btn btn-outline-warning bg-warning text-black" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add User</button>
                </div>
                <table class="table table-striped col-12 bg-white">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Username</th>
                        <th scope="col">email</th>
                        <th scope="col">role</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($rows = mysqli_fetch_assoc($result)) 
                            { 
                               ?>   
                                <tr>
                                    <th scope="row"><?php echo $rows['id']?></th>
                                    <td><?php echo $rows['username']?></td>
                                    <td><?php echo $rows['email']?></td>
                                    <td><?php echo $rows['role']?></td>
                                    <td>
                                            <!-- <a href="users/edit.php?= $rows['id']?>" class="btn bg-dark text-white">Edit</a>  -->
                                    <a href="user.php?id<?= $rows['id']?>" class="btn bg-dark text-white" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@getbootstrap" >Edit</a>
                                    <a href="user.php?id=<?= $rows['id']?>" class="btn  btn btn-warning">Delete</a>
                                    </td>
                                </tr> 
                                <?php
                            } 
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog text-black">
                    <div class="modal-content">
                        <div class="modal-header bg-white ">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Movie To Home page:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-white ">
                            <!-- the form -->
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                <?php

                                    if (isset($_GET['id'])){
                                        $condition = [ "id" => mysqli_real_escape_string($connexion , $_GET['id'])];
                                        $result = selectData("users", ['*'], $condition, 's');

                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                $username = $row['username'];
                                                $email = $row['email'];
                                                $password = $row['password'];
                                                $role = $row['role'];
                                                $id = $row['id'];
                                            }
                                            
                                        }
                                    }
                                ?>
                            
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" id="recipient-name" value="<?php echo $username; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control" id="recipient-name" value="<?php echo $email; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="recipient-name" value="<?php echo $password; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Role:</label>                            
                                    <select name="role" class="form-select" aria-label="Default select example">
                                        <option selected value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                </div>

                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary bg-warning text-black " data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" name="update" class="btn bg-black text-white">Update User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>