<?php
include("../config/config.php");

$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = md5($password);

$sql = "INSERT INTO dbrps(username, password) VALUES ('$username', '$hashedPassword')";
$query = mysqli_query($connect, $sql);

if($query){
    echo '<script>alert("Congratulations! Your registration was successful.");</script>';
    echo '<script>window.location.href = "../pages/Login.php";</script>';
}else{
    echo '<script>alert("Your registration was failed.");</script>';
    echo '<script>window.location.href = "../pages/Register.php";</script>';
}

?>