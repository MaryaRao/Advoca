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
    <!-- FLAT PICKR -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Admin Dashboard - Lawyer Registration</title>
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
        <li class="nav-item"><a href="./lawyerreg.php" class="nav-link text-white p-2 mb-2 current">
        <i class="fas fa-user-tie text-light fa-lg mr-2"></i>Lawyer Registration</a></li>     
        <li class="nav-item"><a href="./lawyerRegistration.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-address-card text-light fa-lg mr-2"></i>Lawyer Details</a></li>
        <li class="nav-item"><a href="./userreg.php" class="nav-link text-white p-2 mb-2">
        <i class="fas fa-user text-light fa-lg mr-2"></i>User Registration</a></li>
        <li class="nav-item"><a href="./review.php" class="nav-link text-white p-2 mb-2">
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
            <a type="button" href="lawyerreg.php?logout=true" class="btn btn-outline-danger">Yes</a>
        </div>
        </div>
    </div>
</div>
<!------End of Modal--->

<!------Tables--->
<style>
	.body{
		background-image:url(../law/assets/images/formbg.jpg);
        z-index:100;
		background-repeat:no-repeat;
		background-size:cover;
	}
	
	.styleForm {
		background-color: rgba(0, 0, 0, 0.8);
		overflow:hidden;

	
	}
  form input {
    border:1px solid #fff;
    color: white;
    font-family: sans-serif;
  }
	/* select:hover{
		border:1px solid #e28401;
	}
	textarea:hover{
		border:1px solid #e28401;
	} */
    .form-control{
        cursor: pointer;
    }
    .input2{
        cursor: pointer;
    }
    .form-selectform-control{
        cursor:pointer;
    }
    .form-selectform-control option{
        cursor: pointer !important;
    }
   
</style>
<section class="table-sec">
<div class="container-fluid">
    <div class="row mb-5">
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row">
            <div class="col-12">
            <h3 class="text-dark text-center mb-3 heading">Lawyer Registration Form:</h3>
</div>
<?php
// Include your database connection code here (e.g., $conn = new mysqli("hostname", "username", "password", "database_name");)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve Data
    $name = $_POST["name"];
    $dob = date("Y-m-d", strtotime($_POST["dob"]));
    $fhname = $_POST["fhname"];
    $nat = $_POST["nat"];
    $enrdate = date("Y-m-d", strtotime($_POST["enrdate"]));
    $select_type = $_POST["select_type"];
    $status = $_POST["status"];
    $work = $_POST["work"];
    $selectedChoices = isset($_POST["choose"]) ? $_POST["choose"] : array();
    $choose = implode(", ", $selectedChoices);
    $edu = $_POST["edu"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $city = $_POST["select2"];
    $cnic = $_POST["cnic"];

    // Image Upload
    $image = $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];
    $imagePath = "image/" . $image;
    move_uploaded_file($imageTmp, $imagePath);

    // Certificate Upload
    $cert1 = $_FILES["cert1"]["name"];
    $cert1Tmp = $_FILES["cert1"]["tmp_name"];
    $cert1Path = "image/".$cert1; 
    move_uploaded_file($cert1Tmp, $cert1Path);

    $cert2 = $_FILES["cert2"]["name"];
    $cert2Tmp = $_FILES["cert2"]["tmp_name"];
    $cert2Path = "image/". $cert2;
    move_uploaded_file($cert2Tmp, $cert2Path);

    // Fee Upload
    $fee = $_FILES["fee"]["name"];
    $feeTmp = $_FILES["fee"]["tmp_name"];
    $feePath = "image/" . $fee;
    move_uploaded_file($feeTmp, $feePath);
    $emailsql = "Select Count(*) as emailCount from lawyerreg where email = '$email'";
    $row = mysqli_query($conn,$emailsql);
    $emailExist = mysqli_fetch_assoc($row);
    if(!empty($emailExist) && $emailExist['emailCount'] >0){
        echo "<script>
        alert('Email address already exist . use a different email ');
        </script>";
    }    
else{
    // Insert Query
    $sql = "INSERT INTO `lawyerreg`(`Image`, `name`, `DOB`, `f_hname`, `nationality`, `enroll_date`, `type`, `status`, `work`, `education`, `certificate1`, `certificate2`, `further_edu`, `fee_voucher`, `contact`, `email`, `city`, `cnic_no`) VALUES ('$imagePath','$name','$dob','$fhname','$nat','$enrdate','$select_type','$status','$work','$edu','$cert1Path','$cert2Path','$choose','$feePath','$contact','$email','$city','$cnic')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Clear form data after successful submission
        $imagePath = $name = $dob = $fhname = $nat = $enrdate = $select_type = $status = $work = $edu = $contact = $email = $select2 = $cnic = $cert1Path = $cert2Path = $feePath = "";
        $selectedChoices = array();
        
        echo "<script>
            alert('Data inserted successfully!');
        </script>";
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    // Close the connection
    $conn->close();
}
?>


<div class="container">
    <div class="form-row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <!-- Your image upload field -->
            <label for="Image" class="form-label">Upload your image:</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="col-md-6">
            <!-- Your image upload field -->
            <!-- <input type="hidden" class="form-control" name="image" required> -->
        </div>
</div>
<div class="form-row">
        <div class="col-md-6">
            <!-- Name field -->
            <label for="inputName4" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Name" required>
            <small id="nameValidationMessage" class="form-text text-danger"></small>
        </div>
        <div class="col-md-6">
            <!-- Father's/Husband's Name field -->
            <label for="inputName4" class="form-label">Father's/Husband's Name:</label>
            <input type="text" class="form-control" name="fhname" placeholder="Name" required>
            <small id="name1ValidationMessage" class="form-text text-danger"></small>
        </div>
</div>
        <div class="form-row">
        <div class="col-md-6">
            <!-- Date Of Birth field -->
            <label for="inputName4" class="form-label">Date Of Birth:</label>
            <input type="text" class="form-control" name="dob" placeholder="Enter DOB" id="rangeDate">
        </div>
 
        <div class="col-md-6">
            <!-- Nationality field -->
            <label for="inputName4" class="form-label">Nationality:</label>
            <input type="text" class="form-control" name="nat" placeholder="Pakistan" required>
        </div>
        </div>

<div class="form-row">
        <div class="col-md-6">
            <!-- Date of enrollment field -->
            <label for="inputName4" class="form-label">Date of enrollment as an Advocate of High Court:</label>
            <input type="text" class="form-control" name="enrdate" placeholder="Enter Date" id="calendar-tomorrow1">
            
</div>
        <div class="col-md-6">
            <!-- Select Type field -->
            <label for="select_type" class="form-label">Select Type:</label><br>
            <select id="select_type" name="select_type" class="form-selectform-control" required>
                <option value="commercial lawyer">Commercial Lawyer</option>
                <option value="criminal lawyer">Criminal Lawyer</option>
                <option value="family lawyer">Family Lawyer</option>
                <option value="divorce lawyer">Divorce Lawyer</option>
                <option value="taxation lawyer">Taxation Lawyer</option>
                <option value="real estate lawyer">Real Estate Lawyer</option>
            </select>
        </div>
        </div>
<div class="form-row">
        <div class="col-md-6">
            <!-- Status field -->
            <label for="inputName4" class="form-label">Status:</label>
            <input type="text" class="form-control" name="status" placeholder="Enter Status" required>
        </div>
        <div class="col-md-6">
            <!-- Work field -->
            <label for="inputName4" class="form-label">Work:</label>
            <input type="text" class="form-control" name="work" placeholder="Advocate" required>
        </div>
        </div>
<div class="form-row">
        <div class="col-md-6">
            <!-- Education field -->
            <label for="inputName4" class="form-label">Education:</label>
            <input type="text" class="form-control" name="edu" placeholder="Education" required>
        </div>
        <div class="col-md-6">
            <!-- Upload Certificates fields -->
            <label class="form-label">Upload Certificates:</label>
            <input type="file" class="form-control" name="cert1" required>
<input type="file" class="form-control" name="cert2">
        </div>
        </div>
<div class="form-row">
        <div class="col-md-6">
            <!-- Days checkboxes -->
            <label class="form-label">Days:</label><br>
            <div class="form-check">
            <input class="input2" type="checkbox" name="choose[]" value="Mon">Monday
	  <input class="input2" type="checkbox" name="choose[]" value="Tue">Tuesday
	  <input class="input2" type="checkbox" name="choose[]" value="Wed">wednesday
      <input class="input1" type="checkbox" name="choose[]" value="Thurs">Thursday 
      <input class="input2" type="checkbox" name="choose[]" value="Fri">Friday
              
            </div>
</div>
            <!-- Repeat this structure for other days -->
        <div class="col-md-6">
            <!-- Upload Fee Voucher field -->
            <label class="form-label">Upload Fee Voucher:</label><br>
            <small id="emailHelp" class="form-text text-muted">Have you submitted the fee.. if so, upload voucher.</small>
            <input type="file" name="fee" class="form-control">
        </div>
</div>
<div class="form-row">
        <div class="col-md-6">
            <!-- Contact field -->
            <label for="inputName4" class="form-label">Contact:</label>
            <input type="text" class="form-control" name="contact" placeholder="Your Contact" required>
            <small id="contactValidationMessage" class="form-text text-danger"></small>
        </div>
        <div class="col-md-6">
            <!-- Email Address field -->
            <label for="exampleInputEmail1" class="form-label">Email Address:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <small id="emailValidationMessage" class="form-text text-danger"></small>
        </div>
        </div>
    <div class="form-row">
        <div class="col-md-6">
            <!-- City field -->
            <label for="inputCity" class="form-label">City:</label>
            <select id="inputState" name="select2" class="form-select" required>
                <option selected>Karachi</option>
                <option>Lahore</option>
                <option>Islamabad</option>
                <option>Hyderabad</option>
            </select>
        </div>
        <div class="col-md-6">
            <!-- CNIC No field -->
            <label for="inputPhone" class="form-label">CNIC No:</label>
            <input type="text" class="form-control" name="cnic" placeholder="CNIC" required>
            <small id="cnicValidationMessage" class="form-text text-danger"></small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-danger" name="submit">Add Laywer</button>
        </div>
    </div>
    </form>
</div>
<div class="container" style="height:100px"></div>
</div>

</div>
</div>
</section>
<!------Footer--->
<footer class="footer bg-dark w-100" style="left: 0;">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.1/flatpickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script>
  flatpickr('#rangeDate', {
    dateFormat: "F, d Y"
  });
  flatpickr('#calendar-tomorrow1', {
    dateFormat: "F, d Y"
  });

const form = document.getElementById('registrationForm');
const nameInput = form.querySelector('input[name="name"]');
const fhnameInput = form.querySelector('input[name="fhname"]');
const emailInput = form.querySelector('input[name="email"]');
const cnicInput = form.querySelector('input[name="cnic"]');
const contactInput = form.querySelector('input[name="contact"]');

form.addEventListener('submit', function(event) {
  let isValid = true;

  // Validation functions
  function validateName(name) {
    return /^[A-Za-z\s]+$/.test(name);
  }
  function validateName(fhname) {
    return /^[A-Za-z\s]+$/.test(fhname);
  }
  function validateEmail(email) {
    return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
  }

  function validateCNIC(cnic) {
    return /^\d{5}-\d{7}-\d{1}$/.test(cnic);
  }

  function validateContact(contact) {
    return /^\d{11}$/.test(contact);
  }

  // Perform validation
  if (!validateName(nameInput.value)) {
    nameValidationMessage.textContent = 'Please enter a valid name (letters and spaces only)';
    isValid = false;
  } else {
    nameValidationMessage.textContent = '';
  }
  if (!validateName(nameInput.value)) {
    name1ValidationMessage.textContent = 'Please enter a valid name (letters and spaces only)';
    isValid = false;
  } else {
    name1ValidationMessage.textContent = '';
  }

  if (!validateEmail(emailInput.value)) {
    emailValidationMessage.textContent = 'Please enter a valid email address';
    isValid = false;
  } else {
    emailValidationMessage.textContent = '';
  }

  if (!validateCNIC(cnicInput.value)) {
    cnicValidationMessage.textContent = 'Please enter a valid CNIC number (e.g., 12345-6789012-3)';
    isValid = false;
  } else {
    cnicValidationMessage.textContent = '';
  }

  if (!validateContact(contactInput.value)) {
    contactValidationMessage.textContent = 'Please enter a valid contact number with 11 digits (0-9 only)';
    isValid = false;
  } else {
    contactValidationMessage.textContent = '';
  }

  if (!isValid) {
    event.preventDefault(); // Prevent form submission if validation fails
  }
});

   
</script>
</body>
</html>