<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Appointment Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
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
</head>

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
	form input {
		color: white;
	}
</style>

<body>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
    include "../admin panel/conn.php";
    $lawyerName = $_GET['lawyer_name'] ?? '';
    $lawyerType = $_GET['lawyer_type'] ?? '';
    $lawyerImage = $_GET['lawyer_image'] ?? 'default.jpg';
    if (isset($_POST['submit'])) {
		// Form has been submitted, process the data
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['choose'];
		$address = $_POST['address'];
		$city = $_POST['select'];
		$tel = $_POST['tel'];
		$txtarea = $_POST['txtarea'];
	
		// Now you can use these variables to perform further actions,
	
	
		// Example: Insert data into a database
		$sql = "INSERT INTO `user_registration`(`name`, `email`, `gender`, `address`, `city`, `tel`, `matter`) VALUES ('$name','$email','$gender','$address','$city','$tel','$txtarea')";
		
		if (mysqli_query($conn, $sql)) {
			echo "<script>
            alert('You\\'ll receive an email soon!')
           </script>";
		} else {
			echo "Error: ";
		}
		// Close the connection
		$conn->close();
	}
	?>


	<!-- <div class="fh5co-loader"></div> -->

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
					<li class="items nav-item dropdown active">
  <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bold;font-color:gray;">
    Laywers <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i>
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
				</ul>
			</div>
		</div>
	</div>
	</div>
</nav>
</div>
<!-- // ----- ------ //  -->


<div class="body">
<div id="styleForm">
        <div class="container">
            <div class="row" style="display:flex;align-items:center;">
                <div class="col-md-6" >
                <br>
                <h3 style="color:gainsboro; font-weight:bold;">Lawyer: <?php echo $lawyerName; ?></h3>
                <h3 style="color:gainsboro; font-weight:bold;">Type: <?php echo $lawyerType; ?></h3>

</div>
<style>
	.body{
		background-image:url(../law/assets/images/formbg.jpg);
		background-repeat:no-repeat;
		background-size:cover;
	}
	
	#styleForm {
		background-color: rgba(0, 0, 0, 0.8);
		overflow:hidden;
	}
	label{
		color:gainsboro;
	}
	input::placeholder{
		color: gainsboro !important;
	}
	input{
		border:1px solid gainsboro !important;
		color: white !important;
	}
	select{
		border:1px solid gainsboro !important;
		color: white !important;
	}
	textarea{
		border:1px solid gainsboro !important;
		color: white !important;
	}
	input:hover{
		border: 1px solid #e28401;
	}
	select:hover{
		border: 1px solid #e28401;
	}
	textarea:hover{
		border: 1px solid #e28401;
	}
	small{
		color:gainsboro !important;
	}

	
</style>
<div class="col-md-6" style="display:flex;justify-content:right;">
<img src="../admin panel/<?php echo $lawyerImage; ?>" alt="Lawyer Image" width="200px" style="border-radius:50%;">
</div>
</div>  
      </div>
	<div class="container">
    <form action="" method="post" id="userregistrationForm">
  <div class="form-row">
   
    <div class="form-group col-md-6">
      <label for="inputName4">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Name" required >
	<small id="nameValidationMessage" class="text-danger"></small>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
	  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

	<small id="emailValidationMessage" class="text-danger"></small>
    </div>
  </div>
  <div class="form-group col-md-12">
    <div class="form-check check">
    <style>
      
        .form-check .input2{
            margin-left:30px; 
        }
        .form-check input[type="radio"] {
            margin-right: 2px; /* Adjust the margin as needed */
        }
    </style>
      <label>Gender:</label><br>
        <input class="input1" type="radio" name="choose" value="Male">Male 
        <input class="input2" type="radio" name="choose" value="Female"> Female
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
  </div>
 

    <div class="form-group col-md-6">
      <label for="inputCity">City:</label>
      <select id="inputState" name="select" class="form-control" required>
        <option selected style="color: black;">Karachi</option>
        <option style="color: black;">Islamabad</option>
        <option style="color: black;">Lahore</option>
        <option style="color: black;">Hyderabad</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPhone">Tel:</label>
      <input type="text" class="form-control" name="tel" placeholder="Enter your phone number" required>
	<small id="contactValidationMessage" class="text-danger"></small>
    </div>
	<div class="form-group col-md-12">
      <label for="inputPhone" >Briefly describe your matter:</label>
      <textarea name="txtarea" class="form-control" cols="10" rows="5" required></textarea>
    </div>
    
 
	<div class="col-md-12">
    <button type="submit" class="btn" name="submit">Book Now</button>
    <style>  .col-md-12 .btn {
        background-color: transparent;
        border: 2px solid #fff;
        color: white;
        font-weight: 500;
        font-family: sans-serif;
        border-radius: 5px;
        width: 300px;
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

	<script>
const form = document.getElementById('userregistrationForm');
const nameInput = form.querySelector('input[name="name"]');
const emailInput = form.querySelector('input[name="email"]');
const contactInput = form.querySelector('input[name="tel"]');

form.addEventListener('submit', function(event) {
  let isValid = true;

  // Validation functions
  function validateName(name) {
    return /^[A-Za-z\s]+$/.test(name);
  }
  function validateEmail(email) {
    return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
  }


  function validateContact(tel) {
    return /^\d{11}$/.test(tel);
  }

  // Perform validation
  if (!validateName(nameInput.value)) {
    nameValidationMessage.textContent = 'Please enter a valid name (letters and spaces only)';
    isValid = false;
  } else {
    nameValidationMessage.textContent = '';
  }

  if (!validateEmail(emailInput.value)) {
    emailValidationMessage.textContent = 'Please enter a valid email address';
    isValid = false;
  } else {
    emailValidationMessage.textContent = '';
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