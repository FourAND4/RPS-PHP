<?php
include '../config/config.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    $sql = "DELETE FROM dbdata WHERE nik = ?";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $nik);

        if (mysqli_stmt_execute($stmt)) {
            header('location: ../pages/list.php');
        } else {
            echo "Delete operation failed: " . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the SQL statement: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>
