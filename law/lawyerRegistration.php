<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Animate.css -->

	<link rel="stylesheet" href="./assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="./assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="./assets/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="./assets/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="./assets/css/style.css">
  <!-- FontAwsome Link  -->
  <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
  <!-- FLAT PICKR -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
		.items a{
  color:gainsboro !important;
}
#fh5co-footer .fh5co-footer-links li a {
		color: gainsboro !important;
	}
	#fh5co-footer .ftlink li a {
		color: gainsboro !important;
		text-decoration: underline;
	}

  .form input{
    border:1px solid white;
  }

   /* Searchbar For Desktop  */
	.desktop-search .searchbtn {
		background-color: #e28401;
		padding: 4px 10px;
		border-radius: 25px;
		color: white;
		transition: 0.3s ease;
	}
	.desktop-search:hover .searchbtn {
		background-color: #fa9201;
	}
	.desktop-search input {
		color: black;
		font-size: 15px;
		font-weight: 500;
		font-family: sans-serif;
	}
	.desktop-search {
		border: 2px solid lightgray;
		border-radius: 10px;
	}
	/* // ----- ----- //  */

	/* Searchbar For Mobile  */
	.mobile-search .searchbtn {
		background-color: #e28401;
		padding: 4px 10px;
		border-radius: 25px;
		color: white;
		transition: 0.3s ease;
	}
	.mobile-search:hover .searchbtn {
		background-color: #fa9201;
	}
	.mobile-search input {
		color: black;
		font-size: 15px;
		font-weight: 500;
		font-family: sans-serif;
	}
	.mobile-search {
		border: 2px solid lightgray;
		border-radius: 10px;
	}
	/* // ----- ----- // */
</style>
</head>
<body>

<?php
include "../admin panel/conn.php";
// error_reporting(0);

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
    $select2 = $_POST["select2"];
    $cnic = $_POST["cnic"];

    // Image Upload
    $image = $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];
    $imagePath = "../admin panel/image/" . $image;
    move_uploaded_file($imageTmp, $imagePath);

    // Certificate Upload
    $cert1 = $_FILES["cert1"]["name"];
    $cert1Tmp = $_FILES["cert1"]["tmp_name"];
    $cert1Path = "../admin panel/image/" . $cert1;
    move_uploaded_file($cert1Tmp, $cert1Path);

    $cert2 = $_FILES["cert2"]["name"];
    $cert2Tmp = $_FILES["cert2"]["tmp_name"];
    $cert2Path = "../admin panel/image/" . $cert2;
    move_uploaded_file($cert2Tmp, $cert2Path);

    // Fee Upload
    $fee = $_FILES["fee"]["name"];
    $feeTmp = $_FILES["fee"]["tmp_name"];
    $feePath = "../admin panel/image/" . $fee;
    move_uploaded_file($feeTmp, $feePath);
    $emailSql = "Select count(*) as emailCount from lawyerregistration where email = '$email'";
    $emailExist = mysqli_query($conn,$emailSql);
    $row = mysqli_fetch_assoc($emailExist);
    if(!empty($row) && $row['emailCount'] > 0){
      echo "<script>alert('Email address already exists. Please use a different email.');</script>";
    }
    else{
    // Insert Query
    $sql = "INSERT INTO `lawyerregistration` (`Image`, `name`, `DOB`, `f_hname`, `nationality`, `enroll_date`, `type`, `status`, `work`, `education`, `further_edu`, `contact`, `email`, `city`, `cnic_no`, `certificate1`, `certificate2`, `fee_voucher`) 
    VALUES ('$imagePath', '$name', '$dob', '$fhname', '$nat', '$enrdate', '$select_type', '$status', '$work', '$choose', '$edu', '$contact', '$email', '$select2', '$cnic', '$cert1Path', '$cert2Path', '$feePath')";

    // Execute the query
	if ($conn->query($sql) === TRUE) {
        // Clear form data after successful submission
		$imagePath = $name = $dob = $fhname = $nat = $enrdate = $select_type = $status = $work = $edu = $contact = $email = $select2 = $cnic = $cert1Path = $cert2Path = $feePath ="";
        $selectedChoices = array();
        
        echo "<script>
            alert('Data inserted successfully! we will soon contact you');
            window.location.href = '../law/index.php';
        </script>";
    }
  }
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
  

    // Close the connection
    $conn->close();

?>

<!-- Loader -->
<div class="fh5co-loader"></div>
<!-- // ----- ------ //  -->

<!-- Navbar Start  -->
<div id="page">
<div id="navBack">
<nav class="fh5co-nav" role="navigation" style="background-color:transparent;">
	<div class="top-menu" style="padding:10px 0px">
		<div class="container">
			<div class="row" style="background-color:transparent;">
				<div class="col-xs-2">
					<div id="fh5co-logo" style="margin-top:-30px;">
					<a href="./index.php"><img src="./assets/images/logo.png" alt="" width="120px" height="100px" style="object-fit:cover;"></a></div>
				</div>
			<div class="col-xs-10 text-right menu-1">
				<ul style="margin-top:20px;">
					<li class="items"><a href="./index.php">Home</a></li>
					<!-- Drop-Down  -->
					<li class="items nav-item dropdown">
  <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bold;font-color:gray;">
    Laywers
</a>
  <div class="dropdown-menu drop" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./criminalLawyer.php">Criminal Lawyer</a></button>
    <button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./divorceLawyer.php">Divorce Lawyer</a></button>
    <button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./commercialLawyer.php">Commercial Laywer</a></button>
    <button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./estateLawyer.php">Real Estate Laywer</a></button>
    <button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./taxationLawyer.php">Taxation Laywer</a></button>
	<button class="dropdown-item" type="button" style="background-color:#fff;"><a href="./familyLawyer.php">Family Laywer</a></button>
  </div>
                    </li>
					<li class="items"><a href="about.php">About Us</a></li>
					<li class="items"><a href="contact.php">Contact Us</a></li>
					<li class="items"><a href="affidavit.php">Affidavit</a></li>
					<li class="items"><a href="#" data-toggle="modal" data-target="#registerModal">Register <i class="fa-solid fa-right-to-bracket" style="color: #e28401;"></i></a></li>					
				</ul>
			</div>
		</div>
	</div>
	</div>
</nav>
</div>
<!-- // ----- ------ //  -->


<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Choose your registration type:</p>
      </div>
      <div class="modal-footer">
        <a href="lawyerRegistration.php" class="btn register"><i class="fa-solid fa-user-graduate"></i> Lawyer</a>
		<span style="color: gray; margin: 1px 5px;">Or</span>
        <a href="login.php" class="btn register"><i class="fa-solid fa-user"></i> User</a>
      </div>
    </div>
  </div>
</div>
<!-- // Register Modal -->
<!-- // ----- ------ //  -->
<style>
	.body{
		background-image:url(../law/assets/images/formbg.jpg);
		background-repeat:no-repeat;
		background-size:cover;
	}
	
	.styleForm {
		background-color: rgba(0, 0, 0, 0.8);
		overflow:hidden;

	
	}
  form .form-control {
    border:1px solid #fff;
    color: white;
    font-family: sans-serif;
  }
	form .form-control:hover{
		border:1px solid #e28401;
	}
  label{
		color:gainsboro !important;
	}
	input::placeholder{
		color: gainsboro !important;
	}
	input{
		border:1px solid gainsboro !important;
	}
	select{
		border:1px solid gainsboro !important;
	}
	textarea{
		border:1px solid gainsboro !important;
	}
	input:hover{
		border:1px solid #e28401;
	}
	select:hover{
		border:1px solid #e28401;
	}
	textarea:hover{
		border:1px solid #e28401;
	}
	small{
		color:gainsboro !important;
	}
</style>

<div class="body">
<div class="styleForm">
	<div class="container form">

  <form action="" method="post" enctype="multipart/form-data" id="registrationForm" style="padding: 20px 0;">
  <div class="form-row">
	<div class="col md-6" style="visibility:hidden;"></div>
	<div class="col md-6">
		<label for="Image">Upload your image</label>
		<input type="file" class="custom-file-input" class="btn btn-primary" name="image" required>
	</div>
   
    <div class="form-group col-md-6">
      <label for="inputName4">Name:</label>
      <input type="text"  class="form-control" name="name" placeholder="Name" required>
	  <small id="nameValidationMessage" class="text-danger"></small>
    </div>
    <div class="form-group col-md-6">
    <label for="inputName4">Father's/Husband's Name:</label>
      <input type="text" class="form-control" name="fhname" placeholder="Name" required>
	  <small id="name1ValidationMessage" class="text-danger"></small>
      
	 
    </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-6 dob">
     <label for="inputName4">Date Of Birth:</label>
      <!-- <input type="date" class="form-control" name="dob" placeholder="D.O.B" required> -->
      <input type="text" class="form-control" name="dob" placeholder="Enter DOB" id="rangeDate">
      <style>
        .dob .form-control{
          background: #000 !important;
        }
      </style>
    </div>
    <div class="form-group col-md-6">
      <label for="inputName4">Nationality:</label>
      <input type="text" class="form-control" name="nat" placeholder="Pakistan" required >
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-6 dob">
      <label for="inputName4">Date of enrollment as an Advocate of High Court:</label>
      <!-- <input type="date" class="form-control" name="enrdate" placeholder="Date" required> -->
      <input type="text" class="form-control" name="enrdate" placeholder="Enter Date" id="calendar-tomorrow1">

    </div>
	<div class="form-group col-md-6">
    <label for="select_type">Select Type:</label>
        <select id="select_type" name="select_type" class="form-control" required>
            <option value="commercial lawyer">Commercial Lawyer</option>
            <option value="criminal lawyer">Criminal Lawyer</option>
            <option value="family lawyer">Family Lawyer</option>
            <option value="divorce lawyer">Divorce Lawyer</option>
            <option value="taxation lawyer">Taxation Lawyer</option>
            <option value="real estate lawyer">Real State Lawyer</option>

        </select>
</div>
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputName4">Status:</label>
      <input type="text" class="form-control" name="status" placeholder="Enter Status" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputName4">Work:</label>
      <input type="text" class="form-control" name="work" placeholder="Advocate" required >
    </div>
    </div>

    <!--  -->
  <div class="form-group col-md-12">
    <div class="form-check check">
    <style>
      
        .form-check .input2{
            margin-left:30px; 
        }
        .form-check input[type="radio"] {
            margin-right: 2px; /* Adjust the margin as needed */
        }
        option{
          color:#000;
        }
    </style>
    <!--  -->
    <div class="form-row">
     <div class="form-group col-md-6" style="padding-left:0px;">
      
      <label for="inputName4">Education:</label>
      <input type="text" class="form-control" name="edu" placeholder="Education" required>
    </div>
  
	<div class="form-group col-md-6">
	<div class="custom-file">
    <label class="custom-file-label" for="inputGroupFile01">Upload Certificates:</label>

    <input type="file" class="custom-file-input" class="btn btn-primary" name="cert1" id="inputGroupFile01" required>

    <input type="file" class="custom-file-input" class="btn btn-primary" name="cert2" id="inputGroupFile01">
  </div>
    </div>
    </div>
  </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-6">

      <label >Days:</label><br>
	  <input class="input2" type="checkbox" name="choose[]" value="Mon">Monday
	  <input class="input2" type="checkbox" name="choose[]" value="Tue">Tuesday
	  <input class="input2" type="checkbox" name="choose[]" value="Wed">wednesday
      <input class="input1" type="checkbox" name="choose[]" value="Thurs">Thursday 
      <input class="input2" type="checkbox" name="choose[]" value="Fri">Friday
	</div>
    <div class="form-group col-md-6">
	<div class="custom-file">
    <label class="custom-file-label" for="inputGroupFile01">Upload Fee Voucher:</label><br>
    <small id="emailHelp" class="form-text text-muted">Have you submitted the fee.. if so, upload voucher.</small>
    <input type="file" class="custom-file-input" class="btn btn-primary" name="fee" id="inputGroupFile01" required>

  </div>
    </div>
    </div>
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputName4">Contact:</label>
      <input type="text" class="form-control" name="contact" placeholder="Your Contact" required>
	  <small id="contactValidationMessage" class="text-danger"></small>
    </div><br>
    <div class="form-group col-md-6">
	<label for="exampleInputEmail1">Email Address:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	<small id="emailValidationMessage" class="text-danger"></small>

    </div>
 
    <div class="form-group col-md-6">
      <label for="inputCity">City:</label>
      <select id="inputState" name="select2" class="form-control" required>
        <option selected>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Hyderabad</option>
      </select>

    </div>
    <div class="form-group col-md-6">
      <label for="inputPhone">CNIC No:</label>
      <input type="text" class="form-control" name="cnic" placeholder="CNIC" required>
	  <small id="cnicValidationMessage" class="text-danger"></small><br><br><br>

    </div>
    
    <div class="col-md-12">
    <button type="submit" class="btn" name="submit">Book Now</button>
    <style>
      .col-md-12 .btn {
        background-color: transparent;
        border: 2px solid #fff;
        color: white;
        font-weight: 500;
        font-family: sans-serif;
        border-radius: 5px;
        width: 300px;
        margin-top: -75px;
        transition: 0.3s ease;
      }
      .col-md-12 .btn:hover  {
        background-color: #e28401;
        border-color: #e28401;
      }
    </style>
    </div>
</form>
    </div>
	</div>
	</div> 
  </div>
  </div>
<div class="box" style="height:200px"></div>
	
<!-- Footer Start -->
<footer id="fh5co-footer" role="contentinfo">
<div class="container">
	<div class="row row-pb-md">
		<div class="col-md-3 fh5co-widget">
			<h4>Attorney's Law</h4>
			<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
				adipisci architecto culpa amet.</p>
		</div>
		<div class="col-md-3 col-md-push-1">
			<h4>Navigation</h4>
			<ul class="fh5co-footer-links">
			
			    <li><a href="index.php">Home</a></li>
			    <li><a href="affidavit.php">Affidavit</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-md-push-1 ftlink">
			<h4>Contact Information</h4>
			<ul class="fh5co-footer-links">
				<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
				<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
				<li><a href="mailto:info@yoursite.com">advoca@gmail.com</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-md-push-1">
			<h4>Opening Hours</h4>
      <ul class="fh5co-footer-links">
				<li>Mon - Wed: 9:00 - 21 00</li>
				<li>Thurs 8:00 - 21 00</li>
				<li>Fri 9:30 - 15: 00</li>
			</ul>
		</div>
	</div>
	<div class="row copyright">
	    <div class="col-md-12 text-center">
			<style>
				.icon-twitter:hover{
					color: #1DA1F2;
				}
				.icon-facebook:hover{
					color: #1877F2;
				}
				.icon-linkedin:hover{
				color:#0A66C2
				}
				.icon-instagram:hover{
					color: #DD2A7B;
				}
			</style>
			<p>
			<ul class="fh5co-social-icons">
				<li><a href="https://twitter.com/i/flow/login"><i class="icon-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/login.php"><i class="icon-facebook"></i></a></li>
				<li><a href="https://www.linkedin.com/login"><i class="icon-linkedin"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
			</p>
		</div>
	</div>
</div>
</footer>
</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="./assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="./assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Modernizr JS -->
	<script src="./assets/js/modernizr-2.6.2.min.js"></script>
	<!-- Waypoints -->
	<script src="./assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="./assets/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="./assets/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="./assets/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="./assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="./assets/js/jquery.magnific-popup.min.js"></script>
	<script src="./assets/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="./assets/js/main.js"></script>
  <!-- FLAT PICKER -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.1/flatpickr.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>

	<!-- Your HTML form here -->

	<script>
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
flatpickr('#rangeDate', {
    dateFormat: "F, d Y"
});
flatpickr('#calendar-tomorrow1', {
 dateFormat : "F, d Y"
});
</script>



</body>

</html>