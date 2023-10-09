<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Law &mdash; Lawyer Details</title>
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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

<?php
include "../admin panel/conn.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["id"])) {
    $lawyerId = $_POST["id"];
    $sql = "SELECT * FROM `lawyerreg` WHERE `id` = $lawyerId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $lawyerData = mysqli_fetch_assoc($result);
        // Display the lawyer details
        // ... (the same code as before)
    } else {
        echo "Lawyer details not found.";
    }
} else {
    echo "Lawyer ID not provided.";
}
?>
<!-- Navbar Start  -->
<div id="page">
<div id="navBack">
<nav class="fh5co-nav" role="navigation" style="background-color:transparent;">
	<div class="top-menu" style="padding:10px 0px">
		<div class="container">
			<div class="row" style="background-color:transparent;">
				<div class="col-xs-2">
					<div id="fh5co-logo" style="margin-top:-30px;"><a href="./index.php"><img src="./assets/images/logo.png" alt="" width="120px" style="object-fit:cover;"></a></div>
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
<style>
    /* Container Styles */
    .container.con {
        /* background-color: rgb(201, 200, 197); */
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); */
		
    }
    /* Image Styles */
    .col-md-5 img {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);

    }
	

    /* Info Styles */
    .info {
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); */
		

    }


	.info h2 {
    font-size: 28px; 
    color: #333;
    margin-bottom: 10px;
    text-transform: capitalize; 
    font-weight: bold; 
    text-align: center; 
}

   

    
	/* List Styles */
ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

/* List Item Title (e.g., "Type", "Status", etc.) */
ul li h3 {
    font-size: 18px; 
    color: #333; 
    font-weight: bold; 
}

/* Contact and Email Information */
ul li h3::before {
    content: attr(data-title); 
    font-weight: bold; 
}

/* Contact and Email Values */
ul li h3::after {
    content: attr(data-value); 
    display: block; 
    font-weight: normal; 
    color: #666; 
}


 
  .link-btn {
    display: inline-block;
    padding: 10px 20px;
    border: 3px solid #e28401;
    border-radius: 10px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    background-color: transparent;
    cursor: pointer;
    overflow: hidden;
    
}

.link-btn:hover {
    background-color: #e28401;
    color: #fff;
    border-color: #e28401;
}


.link-btn a {
    text-decoration: none;
    color: #e28401;
    font-weight: bold;
}

.link-btn:hover a {
    color: #fff;
}

  
</style>

<div class="box" style="height:50px;"></div>
        <div class="container con">
            <div class="row row2">
                <div class="col-md-5" >
                    <img src="../admin panel/<?php echo $lawyerData['Image']; ?>" alt="Lawyer Image" height="500px" width="100%" style="object-fit:cover;">
                </div>
                <div class="col-md-5 info">
					<ul>
	<!-- <h2>Name: <?php echo $lawyerData["name"]; ?></h2> -->
	<li><h3 data-title="Name:" data-value="<?php echo $lawyerData["name"]; ?>"></h3></li>
    <li><h3 data-title="Type:" data-value="<?php echo $lawyerData["type"]; ?>"></h3></li>
    <li><h3 data-title="Work Status:" data-value="<?php echo $lawyerData["work"]; ?>"></h3></li>
    <li><h3 data-title="Education:" data-value="<?php echo $lawyerData["education"]; ?>"></h3></li>
    <li><h3 data-title="Appointment:" data-value="<?php echo $lawyerData["further_edu"]; ?>"></h3></li>
    <li><h3 data-title="Contact:" data-value="<?php echo $lawyerData["contact"]; ?>"></h3></li>
    <li><h3 data-title="Email:" data-value="<?php echo $lawyerData["email"]; ?>"></h3></li>
</ul>
<div class="link">
<button class="link-btn"><a class="a" href="./userRegistration.php?lawyer_name=<?php echo htmlspecialchars($lawyerData['name']); ?>&lawyer_type=<?php echo htmlspecialchars($lawyerData['type']); ?>&lawyer_image=<?php echo htmlspecialchars($lawyerData['Image']); ?>">Go to Lawyer Registration</a></button>
</div>
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