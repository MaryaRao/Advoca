<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Review Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
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
	</style>
</head>
<body>

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

	<div class="container" style="height:100px;"></div>

    <?php

include "../admin panel/conn.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Handle image upload
    $image = $_FILES["image"]["name"];
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Move the uploaded image to the "uploads" directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO `userreview` (`name`, `email`, `rating`, `review`, `user_image`) VALUES ('$name', '$email', '$rating', '$review', '$target_file')";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssiss", $name, $email, $rating, $review, $target_file);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data inserted successfully! we will soon contact you');
            exit();
        </script>";
    }
     else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>



	<style>
		  body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(./assets/images/review.jpg) ;
            background-repeat:no-repeat;
            background-size:cover;
            height:100vh;
        }

         #review {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0,0,0,0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #ffff;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #ffff;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color:black;
        }

        .rating {
            text-align: center;
            font-size: 30px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            color: white;
        }

        .rating label:before {
            content: "\2605";
            display: block;
        }

        .rating input:checked ~ label:before {
            color: #fdd835;
        }

        .rating label:hover:before {
            color: #fdd835;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }


        .custom-file-upload {
            cursor: pointer;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
        }

        .custom-file-upload:hover {
            background-color: #0056b3;
        }

        input[type="submit"] {
            background-color: #e28401;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            width:100%;
        }

        input[type="submit"]:hover {
            background-color: #fa9201;
        }
        .rating {
            display: inline-block;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            width: 25px;
            height: 25px;
            font-size: 25px;
            text-align: center;
            line-height: 25px;
            float: right;
        }

        .rating label:before {
            content: "\2605";
            display: block;
        }

        .rating input:checked ~ label:before {
            content: "\2605";
            color: gold;
        }

        .rating label:hover:before {
            content: "\2605";
            color: gold;
        }
		
    </style>

	<!-- Review form -->
	<div class="container" id="review">
        <h1>Give Us a Review</h1>
        <form action="./index.php" method="post" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" name="name" required><br><br>
            
            <label for="email">Your Email:</label>
            <input type="email" name="email" required><br><br>
            
            <label>Rate Us:</label>
            <div class="rating">
                <input type="radio" name="rating" value="5" id="5"><label for="5"></label>
                <input type="radio" name="rating" value="4" id="4"><label for="4"></label>
                <input type="radio" name="rating" value="3" id="3"><label for="3"></label>
                <input type="radio" name="rating" value="2" id="2"><label for="2"></label>
                <input type="radio" name="rating" value="1" id="1"><label for="1"></label>
            </div><br><br>
            
            <label for="review">Review:</label>
            <textarea name="review" rows="4" cols="50" required></textarea><br><br>

            <label for="image">Upload Image:</label>
            <input type="file" name="image"><br><br>
            
            <input type="submit" name="submit" value="Submit Review">
            <!-- <button type="submit" name="submit">Book Now</button> -->
        </form>
    </div>
  <!-- Review form end -->



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
<!-- // ----- ------ //  -->

<!-- Scroll-Top Arrow  -->
<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
<!-- // ----- ------ //  -->

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

</body>
</html>

