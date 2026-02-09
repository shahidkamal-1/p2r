<?php
$id= $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql = " DELETE FROM data_base WHERE id ={$id} ";
$result = mysqli_query($conn, $sql) or ("Query Unsuccessful");
header("location:/crud/read.php");
mysqli_close($conn);
?>
