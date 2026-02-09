<?php
require 'include/signupheader.php' ?>
<?php require 'include/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE ID</title>
</head>

<body>
<section>
    <div class="service-banner">
        <div class="container">
            <div class="hero-section">
                <div class="banner-content">
                    <h2>CRUD</h2>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="delete">

        <div class="container">
            <div class="as-heading">
                <h4><span class=" white-pink-circle">UPDATE USER ID </span><span
                        class="white-pink-circle2"></span>
                </h4>
            </div>
            <div class="delete-id">
                <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="form-group">
                        <!-- <label>ID</label> -->
                        <input class="id-field" type="text" name="sr" placeholder="id" />
                    </div>
                    <input class="submit" type="submit" name="showbtn" value="Update" />

                </form>

                <?php

                if(isset($_POST['showbtn'])){
                    $conn = mysqli_connect('localhost', 'root', '', 'crud') or die("connection failed");
                    $id = $_POST['id'];
                    $sql = "SELECT * FROM signup WHERE id='{$id}'";
                    $result = mysqli_query($conn, $sql) or die("Failed");
                    if (mysqli_num_rows($result) ) {
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                 <div class="updateedit-form">
                     <div class="container">
                <form method="post" action="update.php">
                        <div class="form-group">
                            <span></span>
                            <input type="hidden" class="form-control" id="Sr" name="sr" value="<?php echo $row['Sr']; ?>">
                            <input type="text" class="form-control" id="Name" placeholder="Name" name="name" value="<?php echo $row['Name']; ?>">
                        </div>
                        <div class="form-group">
                            <span></span>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $row['Email']; ?>">
                        </div>
                        <div class="form-group">
                            <span></span>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $row['Password']; ?>">
                        </div>
                        <div class="form-group">
                            <span></span>
                            <input type="file" class="form-control-file" id="image" placeholder="Upload Image" name="image" value="<?php echo $row['Image']; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary" value="update">Update</button>
                </form>
                     </div>
                 </div>
<?php
}
}
}
?>

        </div>
    </div>
</section>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>
</body>

</html>
