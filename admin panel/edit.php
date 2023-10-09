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
    <title>Admin Dashboard - Lawyer Registration</title>
</head>

<style> 
.btn-primary{
    background: red;
    color:#fff;
    border: 1px solid red;;
}
.btn-primary:hover{
    background: red;
    color:#fff;
    border: 1px solid red;;
}
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
<?php

if (isset($_POST["submit"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $dob = $_POST["dob"];
  $fhname = $_POST["fhname"];
  $nat = $_POST["nat"];
  $enrdate = $_POST["enrdate"];
  $select_type = $_POST["select_type"];
  $status = $_POST["status"];
  $work = $_POST["work"];
  $selectedChoices = isset($_POST["choose"]) ? $_POST["choose"] : array();
  $edu = $_POST["edu"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $select2 = $_POST["select2"];
  $cnic = $_POST["cnic"];

  $sql = "UPDATE lawyerreg SET name=?, DOB=?, f_hname=?, nationality=?, enroll_date=?, type=?, status=?, work=?, education=?, further_edu=?, contact=?, email=?, city=?, cnic_no=? WHERE id=?";
  $stmt = $conn->prepare($sql);
  $education = implode(", ", $selectedChoices); // Convert array to comma-separated string
  $stmt->bind_param("ssssssssssssssi", $name, $dob, $fhname, $nat, $enrdate, $select_type, $status, $work, $education, $edu, $contact, $email, $select2, $cnic, $id);
  if ($stmt->execute()) {
      echo "Record updated successfully.";
      if ($select_type === "commercial lawyer") {
        header("Location: ../law/commercialLawyer.php"); // Change this to the appropriate URL
        exit();
    } elseif ($select_type === "divorce lawyer") {
        header("Location: ../law/divorceLawyer.php"); // Change this to the appropriate URL
        exit();
        
  }
  elseif ($select_type === "criminal lawyer") {
    header("Location: ../law/criminalLawyer.php"); // Change this to the appropriate URL
    exit();
    
}  
elseif ($select_type === "family lawyer") {
header("Location: ../law/familyLawyer.php"); // Change this to the appropriate URL
exit();

} 
elseif ($select_type === "real state lawyer") {
header("Location: ../law/estateLawyer.php"); // Change this to the appropriate URL
exit();

} 
elseif ($select_type === "taxation lawyer") {
header("Location: ../law/taxationLawyer.php"); // Change this to the appropriate URL
exit();

} 
}  else {
      echo "Error updating record: " . $stmt->error;
  }
  $stmt->close();
}

 $selectedChoices = array(); // Initialize the variable
 
 if (isset($_GET["id"])) {
     $id = $_GET["id"]; // Retrieve the id parameter from the URL
     $sql = "SELECT * FROM lawyerreg WHERE id = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $result = $stmt->get_result();
     if ($result) {
         $totalrow = mysqli_num_rows($result);

         if ($totalrow != 0) {

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
        <img src="./image/mohammedAli.jpg" width="50" class="rounded-circle mr-3">  
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
        <i class="fas fa-phone text-light fa-lg mr-2"></i>User Registration</a></li>
        <li class="nav-item"><a href="./review.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-star text-light fa-lg mr-2"></i>Testimonials</a></li>
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
            <a type="button" href="lawyerreg.php?logout=true" class="btn btn-outline-danger">Yes</a>
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
            <h3 class="text-dark text-center mb-3 heading">Edit Lawyer details</h3>
<!-- Php Start  -->
<div class="container">
        <?php
                             while ($data = mysqli_fetch_assoc($result)) {
                         $selectedChoices = explode(", ", $data['education']); // Initialize the variable with education data
                                        ?>
 <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 d-none">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        </div>
        <div class="col-md-6">
            <img src="<?php echo $data['Image']; ?>" alt="Profile Image" width="150" height="150" name="image"
                style="border-radius: 50%; object-fit: cover;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="inputName" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $data['name'] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputDOB" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" name="dob" placeholder="Enter Birth Date" value="<?php echo $data['DOB'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputFHName" class="form-label">Father's/Husband's Name:</label>
            <input type="text" class="form-control" name="fhname" placeholder="Name" value="<?php echo $data['f_hname'] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputNationality" class="form-label">Nationality:</label>
            <input type="text" class="form-control" name="nat" placeholder="Pakistani" value="<?php echo $data['nationality'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputEnrollmentDate" class="form-label">Date of enrollment as an Advocate of High Court:</label>
            <input type="date" class="form-control" name="enrdate" placeholder="Date" value="<?php echo $data['enroll_date'] ?>">
        </div>
        <div class="col-md-6">
            <label for="select_type" class="form-label">Select Type:</label>
            <select id="select_type" name="select_type" class="form-select">
                <option value="commercial lawyer">Commercial Lawyer</option>
                <option value="criminal lawyer">Criminal Lawyer</option>
                <option value="family lawyer">Family Lawyer</option>
                <option value="divorce lawyer">Divorce Lawyer</option>
                <option value="taxation lawyer">Taxation Lawyer</option>
                <option value="real estate lawyer">Real State Lawyer</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Status:</label>
            <input type="text" class="form-control" name="status" placeholder="Enter Status" value="<?php echo $data['status'] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputWork" class="form-label">Work:</label>
            <input type="text" class="form-control" name="work" placeholder="Advocate" value="<?php echo $data['work'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Education:</label><br>
            <?php
            $educationChoices = array("BA LL.B", "BCOM LL.B", "BSC LL.B", "LL.B", "LL.M");
            foreach ($educationChoices as $choice) {
                $checked = in_array($choice, $selectedChoices) ? "checked" : "";
                echo '<input class="form-check-input" type="checkbox" name="choose[]" value="' . $choice . '" ' . $checked . '>';
                echo '<label class="form-check-label">' . $choice . '</label><br>';
            }
            ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Upload Certificates:</label><br>
            <div class="custom-file">
                <input type="file" class="form-control custom-file-input" name="certificate1" value="<?php echo $data['certificate1'] ?>">
                <label class="custom-file-label">Certificate 1</label>
            </div>
            <div class="custom-file mt-2">
                <input type="file" class="form-control custom-file-input" name="certificate2" value="<?php echo $data['certificate2'] ?>">
                <label class="custom-file-label">Certificate 2</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputFurtherEdu" class="form-label">Further Education:</label>
            <input type="text" class="form-control" name="edu" placeholder="Education" value="<?php echo $data['further_edu'] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Upload Fee Voucher:</label><br>
            <small class="form-text text-muted">Have you submitted the fee.. if so, upload voucher.</small>
            <input type="file" class="form-control" name="fee" value="<?php echo $data['fee_voucher'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputContact" class="form-label">Contact:</label>
            <input type="text" class="form-control" name="contact" placeholder="Your Contact" value="<?php echo $data['contact'] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email Address:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" value="<?php echo $data['email'] ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City:</label>
            <select id="inputState" name="select2" class="form-select" value="<?php echo $data['city'] ?>">
                <option selected>Karachi</option>
                <option>Lahore</option>
                <option>Islamabad</option>
                <option>Hyderabad</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputCNIC" class="form-label">CNIC No:</label>
            <input type="text" class="form-control" name="cnic" placeholder="CNIC" value="<?php echo $data['cnic_no'] ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3" name="submit" style="">Edit Now</button>
</form>
     
<?php
}
}

        }
}


?>
</div>
<div class="container" style="height:100px;">
</div>

    </div>
    </div>
    </div>
    </div>
</div>
</section>

<!------End of Tables--->

<!------Footer--->
<footer class="footer bg-dark w-100" style="left: 0;z-index:10;">
<div class="container-fluid">
    <div class="row border-top pt-3">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row">
            <div class="col-lg-6 text-center">
            <ul class="list-inline">
                <li class="list-inline-item mr-2">
                    <a href="../law/index.php" class="text-white">Home</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="../law/about.php" class="text-white">About</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="../law/contact.php" class="text-white">Contact</a>
                </li>
                <li class="list-inline-item mr-2">
                    <a href="./AdminPanel.php" class="text-white">Admin</a>
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