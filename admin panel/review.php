<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awsome Link  -->
    <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard - User Registration</title>
</head>

<body>
<!------Navbar---------->
<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span></button>

<div class="collapse navbar-collapse" id="myNavbar">
    <div class="container-fluid">
    <div class="row">

    <!------Sidebar---------->
    <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
        <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">My Admin</a>
            
    <!-- Admin Details and Image  -->
    <div class="bottom-border pb-3">
        <img src="./image/mohammedAli.jpg" width="60" height="60"  class="rounded-circle mr-3">
        <a href="#" class="text-white">Mohammed Ali</a>
    </div>

     <!-- Sidebar Menu Items -->
     <ul class="navbar-nav flex-column mt-4">
     <li class="nav-item"><a href="./AdminPanel.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-home text-light fa-lg mr-2"></i>Dashboard</a></li>
        <li class="nav-item"><a href="./affidavitView.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-file-alt text-light fa-lg mr-2"></i>Affidavit View</a></li>
           <li class="nav-item"><a href="./contactus.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-user text-light fa-lg mr-2"></i>Contact Us</a></li>
        <li class="nav-item"><a href="./lawyerreg.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-user-tie text-light fa-lg mr-2"></i>Lawyer Registration</a></li>     
        <li class="nav-item"><a href="./lawyerRegistration.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-address-card text-light fa-lg mr-2"></i>Lawyer Details</a></li>
        <li class="nav-item"><a href="./userreg.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-user text-light fa-lg mr-2"></i>User Registration</a></li>
        <li class="nav-item"><a href="./review.php" class="nav-link text-white p-2 mb-2 current">
        <i class="fas fa-star text-light fa-lg mr-2"></i>Testimonials</a></li>
        <li class="nav-item"><a href="./Appointment.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-address-card text-light fa-lg mr-2"></i>Appointments</a></li>
    </ul>
    </div>
    <!------End of Sidebar--->
        <!------Top nav---------->
    <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
    <div class="row align-items-center">
        <div class="col-md-4">
            <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
        </div>
        <style>
            #logout {
                position: absolute;
                top: 5px;
                right: 10px;
            }
        </style>
        <!-- Logout Button  -->
        <div class="col-md-3" id="logout">
            <ul class="navbar-nav">
                <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out">
                <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
            </ul>
        </div>
        </div>
        <div>
        </div>
    </div>
    <!------End of Top Nav--->
    </div>
</nav>
<!------End of Navbar--->

<!------Modal--->
<div class="modal fade" id="sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure you want to logout?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Yes</button>
        </div>
        </div>
    </div>
</div>
<!------End of Modal--->

<!------Tables--->
<section class="table-sec">
<div class="container-fluid">
    <div class="row mb-5">
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row">
            <div class="col-12">
            <h3 class="text-dark text-center mb-3 heading">Testimonial Details:</h3>
<!-- Php Start  -->
<?php
include "conn.php";
$sql = "SELECT * FROM userreview";
$result = mysqli_query($conn, $sql);

if ($result) {
    $totalrows = mysqli_num_rows($result);
    if ($totalrows != 0){
    ?>
    <table class="table table-dark table-hover text-center table-border">
    <thead>
        <tr class="text-white">
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>RATING</th>
            <th>REVIEW</th>
            <th>IMAGE</th>
            <th>DELETE</th>
        
</thead>
<?php
 while ($data = mysqli_fetch_array($result)) {
    ?>
    <tbody>
    <tr class='text-light'>
    <td scope="col"><?php echo $data["id"]?></td>
          <td scope="col"><?php echo $data["name"]?></td>
          <td scope="col"><?php echo $data["email"]?></td>
          <td scope="col"><?php echo $data["rating"]?></td>
          <td scope="col"><?php echo $data["review"]?></td>
          <td scope="col"><img src="<?php echo $data['user_image']?>" width="80px"></td>
          <td><a class="btn btn-outline-danger" href="reviewDel.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-trash-can"></i></a></td>

      
    </tr>
    <?php
 }
?>
 </div>
    </div>
    </div>
    </div>
</div>
</section>
<?php
} else {
  echo "No records found";
}
} else {
echo "Error executing the query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>




  

   


<!------End of Tables--->

<!------Footer--->
<footer class="footer bg-dark w-100" style="left: 0;">
<div class="container-fluid">
    <div class="row border-top pt-3">
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row">
            <div class="col-lg-6 text-center">
            <ul class="list-inline">
                <li class="list-inline-item mr-2">
                    <a href="#" class="text-white">Home</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="#" class="text-white">About</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="#" class="text-white">Support</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="#" class="text-white">Blog</a>
                </li>
            </ul>
            </div>
            <div class="col-lg-6 text-center text-white">
                <p>&copy; 2023</p>
            </div>
        </div>
    </div>
    </div>
</div>
</footer>
<!------End of Footer--->

<!-- ------------------------------------------- // ----- Page End ----- \\ ------------------------------------------- -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="java.js"></script>
</body>
</html>