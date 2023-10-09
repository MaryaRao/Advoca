<?php
include "conn.php";
$id = $_GET["id"] ?? "";
$sql = "DELETE FROM userreview WHERE id = '$id'";
$row = mysqli_query($conn, $sql);
if ($row) {
    echo "
    <script>
    alert('ID deleted successfully');
    window.location.href = 'review.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('ID deletion failed');

    </script>
    ";
}
?>
