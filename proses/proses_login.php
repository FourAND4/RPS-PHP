<?php
include '../config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password)){
    $query = mysqli_query($connect, "select * from tugas where username='$username' && password='$password'");

    $result = mysqli_num_rows($query);

    if($result>0){
        header("location:../pages/dashboard.php");
    }else{
        echo '<script>alert("Your login was failed.");</script>';
        echo '<script>window.location.href = "../pages/Login.php";</script>';
    }
}else{
    header("location:../pages/Login.php?app=failed");
}
?>