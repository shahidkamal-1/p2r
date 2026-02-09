<?php require 'include/signupheader.php'; ?>
<?php
if(isset($_REQUEST['submit']) && isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['image'])){
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $password = $_REQUEST['password'];
 $image = $_REQUEST['image'];
 $msg ="";

 $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
 $sql  = "SELECT * FROM data_base WHERE email = '{$email}'";
 $check = mysqli_query($conn,$sql) or ("Query Failed");
 if(mysqli_num_rows($check) == TRUE){
     $msg = "Email Already Exist";
 }else{
     $sql = "INSERT INTO data_base (name,email,password,image) VALUES ('{$name}','{$email}','{$password}','{$image}')";
     $result = mysqli_query($conn,$sql) or ("Query Failed");
 }
 header("Location: http://localhost:91/crud/login.php");
 mysqli_close($conn);

}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <div class="pagewrap">
        <section>
            <div class="hero-sec">
                <div class="container">
                    <div class="via-content-img">
                        <div class="vie-banner-content">

                            <h1>Sign Up Your<br>Registration Form</h1>
                            <span></span>
                                <div class="registration-form">
                                    <form method="post" action="signup.php">
                                        <div class="form-group">
                                            <span></span>

                                            <input type="text" class="form-control" id="Name" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <span></span>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                                            <span><?php echo !empty($msg) ? $msg: ''?></span>
                                        </div>
                                        <div class="form-group">
                                            <span></span>
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <span></span>
                                            <input type="file" class="form-control-file" id="image" placeholder="Upload Image" name="image" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary" value="save" name="submit">Signup</button>
                                        <a class="already-signup" href="login.php" >login if you already signup</a>
                                    </form>
                                </div>
                        </div>
                        <div class="vie-banner-img">
                            <img src="images\header-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
        </footer>
</body>

</html>
