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
    <title>Admin Dashboard - Affidavit</title>
</head>

<style> 
  body {
    overflow-x: visible;
  }

  .table {
    margin-bottom: 100px;
  }

  .table th {
    font-size: 12px;
    border: 1px solid gray; 
  }

  .table td {
    font-size: 10px;
    border: 1px solid gray; 
  }
</style>

<body>
    <!-- Logout Php  -->
<?php
session_start();
include "conn.php";
if(isset($_GET["logout"])) {
    session_destroy();
    unset($_SESSION['Passcode']);
    header("Location: index.php");
    exit;
};
?>
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
        <img src="http://res.cloudinary.com/dfqddpjfl/image/upload/v1494008772/woman1_nr8qgi.jpg" width="50" class="rounded-circle mr-3">
        <a href="#" class="text-white">Mohammed Ali</a>
    </div>

    <!-- Sidebar Menu Items -->
    <ul class="navbar-nav flex-column mt-4">
        <li class="nav-item"><a href="AdminPanel.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-home text-light fa-lg mr-2"></i>Dashboard</a></li>

        <li class="nav-item"><a href="userreg.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-user text-light fa-lg mr-2"></i>User Registration</a></li>

        <li class="nav-item"><a href="lawyerreg.php" class="nav-link text-white p-2 mb-2 current">
        <i class="fas fa-user text-light fa-lg mr-2"></i>Lawyer Registration</a></li>

        <li class="nav-item"><a href="contactus.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-phone text-light fa-lg mr-2"></i>Contact Us</a></li>
    </ul>
    </div>
    <!------End of Sidebar--->

    <!------Top nav---------->
    <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
    <div class="row align-items-center">
        <div class="col-md-4">
            <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
        </div>
        <!-- Search Bar  -->
        <div class="col-md-5">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search">
                    <button type="button" class="btn btn-white search-button">
                    <i class="fas fa-search text-danger"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <ul class="navbar-nav">
                <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
                <i class="fas fa-comments text-muted fa-lg"></i></a></li>
                <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
                <i class="fas fa-bell text-muted fa-lg"></i></a></li>
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
            <a type="button" href="lawyerreg.php?logout=true" class="btn btn-outline-danger">Yes</a>
        </div>
        </div>
    </div>
</div>
<!------End of Modal--->

<!------Tables--->
<style>
    span{
        color:green;
        font-weight: bold;
    }
</style>
<?php
$id = $_GET["id"];
$sql = "SELECT * FROM affidavit WHERE id = '$id'";
$row = mysqli_query($conn,$sql);
$totalrow = mysqli_num_rows($row);
if($totalrow != 0){
?>
<section class="table-sec">
<div class="container-fluid">
    <div class="row mb-5">
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
    <div class="container containerForm">
        <style>
            .containerForm{
                background-image: url(../law/assets/images/affidavit_background.jpg);
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;
            }
        </style>
    <img src="../law/assets/images/stamp.jpg" width="100%" height="400px" alt="stamp">
    <h2 class="text-center">AFFIDAVIT</h2>
    <p class="text-center">(SWORN STATEMENT)</p>
    <form id="signature-form" method="POST">
        <?php
        while($data= mysqli_fetch_assoc($row)){ 
        ?>
    <div class="form-row">
        <input type="hidden" name="id">
    <div class="form-group col-md-4">
      <b>Date</b>
      <span><?php echo $data["date1"]?></span>
    </div>
    <div class="form-group col-md-8" style="visibility:hidden;">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group">
    <b>My legal name is</b>
    <span><?php echo $data["affiant_name"]?></span>
     <b>and acknowledge I am:</b>
  </div>
</div>
<div class="form-row">
  <div class="form-group">
    <ul>
        <li> 
            <b>Age</b>
            <span><?php echo $data["age"]?></span>
</li>
<br>
<li> 
    <b>Email</b>
    <span><?php echo $data["email"]?></span>
</li>
<br>
<li>
    <b> Residence</b>
    <span><?php echo $data["address"]?></span>
</li>
</ul>
  </div>
</div>
<div class="form-row">
  <div class="form-group" style="">
  <b>Being duly sworn, hereby swear under oath that: </b>
  <p><?php echo $data["statement"]?></p>

  </div>
</div>
<div class="form-row">
  <div class="form-group">
    Under penalty of perjury, I hereby declare and affirm that the above-mentioned statement is, to the best of my knowledge, true and correct.
  </div>
</div>


  <div class="form-row">
    <h3 class="text-center">Lawyer ACKNOWLEDGEMENT</h3>
  <div class="form-group" style="border:1px solid #000;padding:0px 10px;">
  <p>A Lawyer public or other officer completing this certificate verifies only the identity of the individual who signed the document to which this certificate is attached, and not the truthfulness, accuracy, or validity of that document.</p>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group">
   <b>City of:</b> 
   <span><?php echo $data["city"]?></span>
</div>
        </div>
        <div class="form-row">
<div class="form-group">
   <b>Country of:</b> 
   <span><?php echo $data["country"]?></span>
  </div>
</div>
<div class="form-row">
    <div class="form-group">
    On       <span><?php echo $data["date_of_submission_to_lawyer"]?></span> before me,  <span><?php echo $data["lawyerName"]?></span>, personally appeared  <span><?php echo $data["affiant_name"]?></span> who proved to me on the basis of satisfactory evidence to be the person whose name is subscribed to the within instrument and acknowledged to me that they executed the same in their authorized capacity, and that by their signature on the instrument the person(s), or the entity upon behalf of which the person(s) acted, executed the instrument. 
    </div>
</div>
<div class="form-row">
    <div class="form-group">
    <p>I certify under PENALTY OF PERJURY under the laws of the City of  <span><?php echo $data["country1"]?></span> that the foregoing paragraph is true and correct. </p>
    <p>WITNESS my hand and official seal. </p>
    </div>

</div><div class="form-row">
        <div class="form-group">
            <div>
    affiant signature:
        <span><img src="<?php echo $data['signature_image'];?>" alt = "signature of affiant"></span>
        </div>
        <div>
Lawyer's Signature
        <span><img src="<?php echo $data['signature_image'];?>" alt = "signature of affiant"></span>
        </div>
       
      
        </div>
    </div>
    <b>Dated: </b> <span><?php echo $data["date_of_submission_to_court"]?></span>     
    <br><br>
 
    </form>
</div>

</div>
</div></div>
</section>
<?php 
}
}
?>
<div class="container" style="height:100px;"></div>
<!-- Php Start  -->

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

<!-- ------------------------------------------- // ----- Page End ----- \\ ----------------------------------- -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="java.js"></script>
</body>
</html>