<?php
require 'include/header.php'; ?>

<?php

if(isset($_REQUEST['deletebtn'])){
    $id = $_REQUEST['id'];
    $conn = mysqli_connect("localhost","root","","crud") or die ("Connection failed");
    $sql = "DELETE * FROM data_base WHERE id = '{$id}'";
    $result =  mysqli_query($conn, $sql) or ("Query Failed");
    header("location:/crud/read.php");
    mysqli_close($conn);
}
?>
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
                        <h4><span class=" white-pink-circle">DELETE USER ID </span><span class="white-pink-circle2"></span></h4>
                    </div>
            <div class="delete-id">
                <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="form-group">
                        <!-- <label>ID</label> -->
                        <input class="id-field" type="text" name="id" placeholder="id" />
                    </div>
                    <input class="submit" type="submit" name="c" value="Delete" />

                </form>

            </div>
        </div>
    </div>
    </section>
    <footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </footer>
</body>

</html>
