<?php require 'include/signupheader.php'; ?>
<?php
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $sql = "SELECT * FROM data_base WHERE email = '{$email}' AND password ='{$password}'";
    $result = $conn ->query($sql);
    if(mysqli_num_rows($result) > 0){
        header("location:/crud/read.php");
    }else{
        echo "<div class='alert alert-danger'>The Email or either Password is wring</div>";
    }
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
                        <div class="vie-banner-content login-form">

                            <h1>Login<br>Your Account</h1>
                            <span></span>
                            <div class="user-login">

                                <div class="registration-form">
                                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                                        <form method="post" action="login.php">
                                            <div class="form-group">
                                                <span></span>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>

                                            </div>
                                            <div class="form-group">
                                                <span></span>
                                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary" value="login" name="login">Login</button>
                                            <a class="already-signup" href="signup.php">sigup Your Account</a>
                                        </form>
                                </div>
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
