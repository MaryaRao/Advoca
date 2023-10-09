<?php
include "conn.php";
$id = $_GET['Id']??"";
$sql = "DELETE FROM `contactus` WHERE Id = '$id'";
$run = mysqli_query($conn, $sql);

if ($run) {
    echo "<script>alert('Data Deleted Succesfully');
          window.location.href='contactus.php'; </script>";
} else {
    echo "<script>alert('Error');
          window.location.href='contactus.php'; </script>";
}
?>