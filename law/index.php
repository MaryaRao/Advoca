<!-- Logout Work  -->
<?php
session_start();
// Check if logout button is clicked
if (isset($_GET["logout"])) {
	session_destroy();
    unset($_SESSION['Email']);
    header("Location: login.php");
    exit;
};
?>
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
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <!-- FontAwsome Link  -->
    <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	html {
		scroll-behavior: smooth;
	}
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

<!-- Including Connection  -->
<?php
	include "../admin panel/conn.php";
?>
<!-- // ----- ------ //  -->

<!-- Loader -->
<div class="fh5co-loader"></div>
<!-- // ----- ------ //  -->

<!-- Navbar Start  -->
<div id="page">
<div id="navBack">
<nav class="fh5co-nav" role="navigation" style="background-color: transparent;">
	<div class="top-menu" style="padding:10px 0px">
		<div class="container">
			<div class="row" style="background-color:transparent;">
				<div class="col-xs-2">
					<div id="fh5co-logo" style="margin-top:-30px;">
					<a href="./index.php"><img src="./assets/images/logo.png" alt="" width="120px" height="100px" style="object-fit:cover;"></a></div>
				</div>
			<div class="col-xs-10 text-right menu-1">
				<ul style="margin-top:20px;" class="navLink">
				
					<li class="items active"><a href="./index.php">Home</a></li>
					<!-- Drop-Down  -->
					<li class="items nav-item dropdown">
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

<!-- Carousel Start  -->
<aside id="fh5co-hero" class="js-fullheight">
<div class="flexslider js-fullheight">
<ul class="slides">
	<!-- Slide 1 -->
	<li style="background-image:url(./assets/images/indexban.jpeg);background-size:cover;background-position:center;background-attachment:fixed;position:relative;">
	<div class="overlay-gradient"></div>
		<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			<div class="slider-text-inner">
				<h1 style="font-weight: 600; font-family: sans-serif;">Expert Legal Solutions</h1>
				<a href="#section" style="border:1px solid #e28024;padding:15px;border-radius:50%;"><i class="fas fa-caret-down" style="font-size:20px;" class="animate__animated animate__shakeY"></i></a>
			</div>
			</div>
		</div>
	    </div>
	</li>
</ul>
</div>
</aside>
<!-- // ----- ------ //  -->

<!-- Lawyers Cards start -->
<section id="section">
<div id="fh5co-project">
<div class="container">
	<div class="row animate-box">
		<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
			<h2>Diverse Fields of Law: Categorizing Legal Specializations</h2>
		</div>
	</div>
</div>

<section class="container" id="content">
	<div class="row" >
		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./criminalLawyer.php"><img src="./assets/images/CL.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
			<h3>Criminal Lawyers</h3>
			</a>
		</div>

		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./divorceLawyer.php"><img src="./assets/images/divorce.jpg" alt="Free HTML5 Website Template by FreeHTML5.co"	class="img-responsive">
			<h3>Divorce Lawyers</h3>
			</a>	
		</div>

		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./familyLawyer.php"><img src="./assets/images/family.jpeg" alt="Family Lawyer"	class="img-responsive">
			<h3>Family Lawyers</h3>
			</a>
		</div>

		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./commercialLawyer.php"><img src="./assets/images/civil.jpg" alt="Free HTML5 Website Template by FreeHTML5.co"	class="img-responsive">
			<h3>Commercial Lawyers</h3>
			</a>
		</div>

		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./taxationLawyer.php"><img src="./assets/images/taxlaw.jpg" alt="Free HTML5 Website Template by FreeHTML5.co"	class="img-responsive">
			<h3>Taxation Lawyers</h3>
			</a>
		</div>

		<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
			<a href="./estateLawyer.php"><img src="./assets/images/estate.jpg" alt="Free HTML5 Website Template by FreeHTML5.co"	class="img-responsive">
			<h3>Real Estate Lawyers</h3>	
			</a>
		</div>
	</div>
</div>
</section>
</div>
<!-- // ----- ------ //  -->

<!-- Our cards start -->
<div id="fh5co-practice">
<div class="container">
	<div class="row animate-box">
		<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
			<h2>Our Legal Practice Area</h2>
			<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
		</div>
    </div>
	<div class="row">
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
				<i class="fa-solid fa-handcuffs"></i>
			</span>
			<div class="desc">
				<h3><a href="criminalcontent.php">Criminal Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
			    <i class="fa-solid fa-heart-crack"></i>
			</span>
			<div class="desc">
				<h3><a href="divorcecontent.php">Divorce Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
	    </div>
	</div>
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
			    <i class="fa-solid fa-scale-balanced"></i>
			</span>
			<div class="desc">
				<h3><a href="affidavitcontent.php">Affidavit Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
			    <i class="fa-solid fa-gavel"></i>
			</span>
			<div class="desc">
				<h3><a href="commercialcontent.php">Commercial Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
				<i class="fa-solid fa-money-check-dollar"></i>
			</span>
			<div class="desc">
				<h3><a href="taxationcontent.php">Taxation Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 text-center animate-box">
		<div class="services">
			<span class="icon">
				<i class="fa-solid fa-building-columns"></i>
			</span>
			<div class="desc">
				<h3><a href="realestatecontent.php">Real State Law</a></h3>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
				provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
<!-- // ----- ------ //  -->

<!-- Review Cards -->
<div id="fh5co-counter" class="fh5co-counters fh5co-bg-section" style="position: relative; z-index: 10; color: #fff; background-image: url(./assets/images/choose_banner.jpg); background-size: cover;">
<div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: -1;"></div>
<div class="container">
	<div class="row">
		<div class="col-md-3 text-center animate-box">
		    <span class="icon"><i class="icon-user" style="color:#e28401;"></i></span>
			<span class="fh5co-counter js-counter" data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50"></span>
			<span class="fh5co-counter-label">Satisfied Clients</span>
		</div>
		<div class="col-md-3 text-center animate-box">
			<span class="icon"><i class="icon-speech-bubble" style="color:#e28401;"></i></span>
			<span class="fh5co-counter js-counter" data-from="0" data-to="23563" data-speed="5000" data-refresh-interval="50"></span>
			<span class="fh5co-counter-label">Cases Won</span>
		</div>
		<div class="col-md-3 text-center animate-box">
		    <span class="icon"><i class="icon-trophy" style="color:#e28401;"></i></span>
			<span class="fh5co-counter js-counter" data-from="0" data-to="5067" data-speed="5000" data-refresh-interval="50"></span>
			<span class="fh5co-counter-label">Awards Won</span>
		</div>
		<div class="col-md-3 text-center animate-box">
			<span class="icon"><i class="icon-users" style="color:#e28401;"></i></span>
			<span class="fh5co-counter js-counter" data-from="0" data-to="2587" data-speed="5000" data-refresh-interval="50"></span>
			<span class="fh5co-counter-label">Lawyers</span>
		</div>
	</div>
</div>
</div>
</div>
<!-- // ----- ------ //  -->

<!-- Recent Posts Cards -->
<style>
	 
.h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
    font-family: 'Noto Sans', sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
.h2::after {
	content: "";
	width: 140px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #db584e;
	left: 0;
	right: 0;
	bottom: -10px;
    opacity: .8;
}
.col-center {
	margin: 0 auto;
	float: none !important;
}
.acarousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel-item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.acarousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.acarousel .atestimonial {
	padding: 30px 0 10px;
}
.acarousel .overview {	
	font-style: italic;
}
.acarousel .overview b {
	text-transform: uppercase;
	color: #db584e;
}
.acarousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.acarousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.acarousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
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

		.h2::after {
			background: #e28401;
		}

		.carousel-item .overview b {
			color: #e28401;
		}

		#myCarousel {
            width: 400px;
			box-shadow: 0px 4px 10px 2px lightgray;
			height: 400px;
			padding: 5px;
		}
		input[type="submit"] {
            background-color: #e28401;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
			
        }
.rvw{
	text-align: center;

}
        input[type="submit"]:hover {
            background-color: #fa9201;
        }
</style>
<div id="fh5co-blog" class="fh5co-bg-section">
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-center m-auto">
			<h2 class="h2">Testimonials</h2>
			<div id="myCarousel" class="carousel slide acarousel" data-ride="carousel">
				<!-- Carousel -->
				<div class="carousel-inner">
<?php
include "../admin panel/conn.php";
$query = "SELECT * FROM userreview";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $counter = 0; 
while ($row = mysqli_fetch_assoc($result)) {
    $counter++;
    $active_class = ($counter == 1) ? 'active' : '';

    echo '<div class="item carousel-item ' . $active_class . '">';
    echo '<div class="img-box"><img src="' . $row['user_image'] . '" alt=""></div>';
    echo '<p class="overview"><b>' . $row['name'] . '</b>,</p>';
    echo '<p class="overview" style="color:black;">' . $row['email'] . '</p>';
    echo '<p class="atestimonial">' . $row['review'] . '</p>';
    echo '<div class="rating">';

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $row['rating']) {
            echo '<i class="fas fa-star" style="color:#e28401;"></i>';
        } else {
            echo '<i class="far fa-star"></i>';
        }
    }
        echo '</div></p></div>';
    }
} else {
    echo "No reviews found.";
}

mysqli_close($conn);
?>
</div>

<!-- Carousel Controls -->
<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
	<i class="fa fa-angle-left" style="color: black"></i>
</a>
<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
	<i class="fa fa-angle-right" style="color: black"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="rvw">
<a href="reviewform.php"><input type="submit" value="Give Us A Review!"></a>
</div>
<!-- // ----- ------ //  -->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
	
</script>
</body>
</html>