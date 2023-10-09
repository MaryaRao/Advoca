<?php
include "conn.php";
$id = $_GET['Id']??"";
$sql = "DELETE FROM `user_log_sign` WHERE Id = '$id'";
$run = mysqli_query($conn, $sql);

if ($run) {
    echo "<script>alert('Data Deleted Succesfully');
          window.location.href='userreg.php'; </script>";
} else {
    echo "<script>alert('Error');
          window.location.href='userreg.php'; </script>";
}
?>