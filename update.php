<?php require 'include/header.php'; ?>
<?php

$sr = $_POST['sr'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$image = $_POST['image'];
$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");

$sql = "UPDATE data_base SET name = '{$name}', email = '{$email}', password = '{$password}', image= '{$image}' WHERE  sr='{$sr}'";
$result = mysqli_query($conn, $sql) or ("Query Unsuccessful");

header("Location:/crud/read.php");
mysqli_close($conn);
?>
