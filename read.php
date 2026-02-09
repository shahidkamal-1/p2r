<?php
require 'include/header.php';
require 'include/signupheader.php';
?>
<?php
$conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
$sql = "SELECT * FROM data_base";
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read</title>
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
<div class="page-wrap">
    <section>
        <div class=data-read>
            <div class="container">
                <div class="read-table">
                    <div class="data-table">
                        <div class="apps-secreenshot-content">
                            <div class="as-heading">
                                <h4><span class=" white-pink-circle">READ DATA</span><span class="white-pink-circle2"></span>
                                </h4>

                            </div>
                            <div class="live-search">
                                <label>Search</label>
                                <input type="text" id="search" autocomplete="off" placeholder="Search Here...">
                            </div>
                            <table class="table table-hover" id="table-data">

                                <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td class="table-id"><?php echo $row['id']?></td>
                                        <td class="table-id"><?php echo  $row['name'] ?></td>
                                        <td class="table-id"><?php echo $row['email'] ?></td>
                                        <td class="table-id"><?php echo $row['password']?></td>
                                        <td> <img src=" images/<?php echo $row['image'] ?>" width="15%"></td>
                                        <td class="table-id">
                                            <a href="edit.php?id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                                    <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
                                                </svg></a>
                                        </td>

                                    </tr>

                                <?php  }
                                ?>


                            </table>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</div>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#search").on("keyup", function(){
                var search_term= $(this).val();
                $.ajax({
                    url: "test-ajax.php",
                    type:"POST",
                    data: {search:search_term},
                    success: function (data){
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
</footer>
</body>
</html>
</body>

</html>
