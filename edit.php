<?php
require 'include/signupheader.php' ?>
<?php require 'include/header.php'; ?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("connection failed");
$id = $_GET['id'];
$sql = "SELECT * FROM data_base WHERE id='{$id}'";
$result = mysqli_query($conn, $sql) or die("Failed");
if (mysqli_num_rows($result) ) {
    while($row = mysqli_fetch_assoc($result)){
?>
<!doctype html>
        <html lang="en">

        <head>
            <title>Edit</title>
        </head>

        <body>
            <div class="pagewrap">
                <section>
                    <div class="hero-sec">
                        <div class="container">
                            <div class="via-content-img">
                                <div class="vie-banner-content">

                                    <h1>Edit Your Form</h1>
                                    <span></span>
                                    <div class="registration-form">
                                        <form method="post" action="update.php">
                                            <div class="form-group">
                                                <span></span>
                                                <input type="hidden" class="form-control" id="Sr" name="sr" value="<?php echo $row['id']; ?>">
                                                <input type="text" class="form-control" id="Name" placeholder="Name" name="name" value="<?php echo $row['name']; ?>">
                                            </div>
                                            <div class="form-group">

                                                <span></span>
                                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <span></span>
                                                <input type="password" class="form-control" id="Password" placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <span></span>
                                                <input type="file" onchange="readURL(this);"class="form-control-file" id="Image" placeholder="Upload Image" name="image" value="<?php echo $row['image']; ?>">
                                            </div>

                                            <button type="submit" class="btn btn-primary" value="update">Update</button>
                                        </form>
                                <?php
                        }
                                }

                                ?>
                                    </div>

                                </div>
                                <div class="vie-banner-img">
<!--                                    <img src="images\header-img.png" alt="" class="img-fluid">-->
                                    <div class="before-after-img">
                                    </div>
                                    <img id="blah"  src="#" alt="" value="<?php echo $row['image']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
                    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
                    <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah')
                                    .attr('src', e.target.result)
                                    .width(150)
                                    .height(200);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                </script>


                </footer>
        </body>

        </html>
