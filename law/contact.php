<!-- Php Work  -->
<?php
include "../admin panel/conn.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    // For first Checkbox
    $selectedChoices = isset($_POST["check1"]) ? $_POST["check1"] : array();
    $choose = implode(", ", $selectedChoices);
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    // For second Checkbox
    $selectedChoices1 = isset($_POST["check2"]) ? $_POST["check2"] : array();
    $choose_1 = implode(", ", $selectedChoices1);
    $message = $_POST['message'];
    $aboutus = $_POST['aboutus'];
$sql = "INSERT INTO `contactus`(`Name`, `What would you like`, `Phone`, `Email`, `Area`, `Message`, `About Us`)
VALUES ('$name','$choose','$phone','$email','$choose_1','$message','$aboutus')";
$run = mysqli_query($conn, $sql);
if($run) {
    echo "<script>alert('You\\'ll receive an email soon')</script>";
} else {
    echo "<script>alert('Error!')</script>";
}
};
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Law &mdash; Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

	</style>
</head>
<style>
        body {
            overflow-x: hidden;
        }
        /* Section 1  */
        .cont2 {
            margin-top: 100px;
        }
        .first h3 {
            font-size: 20px;
            font-weight: 500;
            font-family: sans-serif;
        }

        .first li {
            list-style-type: circle;
            font-size: 14px;
            font-weight: 520;
            font-family: 'Times New Roman', Times, serif;
            margin: 5px;
            margin-left: 15px;
            cursor: pointer;
            color: black;
            transition: 0.3s ease;
        }

        .first li:hover {
            color: #e28401;
        }

        .first p {
            font-size: 14px;
            font-weight: 500;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 5px;
            cursor: pointer;
            color: black;
            transition: 0.3s ease;
        }

        .first p:hover {
            color: #e28401;
        }

        .first .card {
            height: 400px;
            width: 622px;
            border: none;
            overflow: hidden;
            border-radius: 0;
        }

        @media screen and (max-width: 750px) {
            .first .card {
                width: auto;
            }
        }

        .second {
            background-color: #e28401;
            color: white;
            height: 450px;
            width: 380px;
            position: absolute;
            top: 23%;
            right: 50px;
            padding: 20px;
        }

        .second h3 {
            color: white;
            font-size: 20px;
            font-weight: 600;
            font-family: sans-serif;
        }

        .second li {
            list-style-type: circle;
            font-size: 16px;
            font-weight: 550;
            font-family: 'Times New Roman', Times, serif;
            margin: 10px;
            text-align: left;
        }

        @media screen and (max-width: 1150px) {
            .second {
                position: relative;
                left: 0;
                height: fit-content;
                width: auto;
            }
        }

        /* Form  */

        .form-container {
            margin: 20px;
            margin-top: 100px;
        }

        .form-container h3 {
            font-size: 20px;
            font-weight: 550;
            font-family: sans-serif;
        }

        @media screen and (max-width: 1150px) {
            .second {
                margin-top: 50px;
                height: fit-content;
                width: auto;
            }
        }

        /* inner css */
        .inner {
            vertical-align: baseline;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.3;
            word-break: break-word;
            margin-top: 20px;
        }

        #text {
            background-color: white;
            box-sizing: border-box;
            border-radius: 2px;
            color: #333;
            display: block;
            float: none;
            font-size: 16px;
            font-family: inherit;
            border: 1px solid #ffad3b;
            padding: 6px 10px;
            height: 150px;
            width: 500px;
        }

        h4 {
            top: 50px;
        }

        h6 {
            font-size: 16px;
        }

        p {
            font-size: 15px;
        }

        .form-control {
            height: 45px;
            width: 450px;
            border-color: lightgray;
            color: black;
            font-weight: 500;
        }
        .form-control:hover {
            border-color: #e28401;
        }

        .form-control:active, .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: #e28401;
        }
        @media screen and (max-width: 550px) {
            .form-control {
                width: auto;
            }
        }

        .btn {
            font-weight: 550;
            font-size: 17px;
            color: black;
            margin-top: 20px;
            border: 2px solid lightgray;
            border-radius: 5px;
            height: 45px;
            width: 300px;
            background: transparent;
            transition: 0.4s ease;
        }

        .btn:hover {
            color: white;
            background-color: #e28401;
            font-weight: 600;
            border-color: #e28401;
        }

        .fh5co-social-icons li a i {
		    color: #e28401;
	    }

	    .block a {
		   color: #e28401;
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
					<div id="fh5co-logo" style="margin-top:-30px;"><a href="./index.php"><img src="./assets/images/logo.png" alt="" width="120px" style="object-fit:cover;"></a></div>
				</div>
			<div class="col-xs-10 text-right menu-1">
				<ul style="margin-top:20px;">
					<li class="items"><a href="./index.php">Home</a></li>
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
					<li class="items active"><a href="contact.php">Contact Us</a></li>
					<li class="items"><a href="affidavit.php">Affidavit</a></li>				
                </ul>
			</div>
		</div>
	</div>
	</div>
</nav>
</div>
<!-- // ----- ------ //  -->

<!-- Carousel Start  -->
<aside id="fh5co-hero" class="js-fullheight">
<div class="flexslider js-fullheight">
<ul class="slides">
	<!-- Slide 1 -->
	<li style="background-image:url(./assets/images/contact.jpg);background-size:cover;background-position:center;background-attachment:fixed;position:relative;">
	<div class="overlay-gradient"></div>
		<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			<div class="slider-text-inner">
				<h1 style="font-weight: 600; font-family: sans-serif;">Contact Us</h1>
			</div>
			</div>
		</div>
	    </div>
	</li>
</ul>
</div>
</aside>
<!-- // ----- ------ //  -->

<div class="container cont2">
<div class="row">
    <div class="first">
        <h3>Telephones:</h3>
    <ul>
        <style>
            .clink{
                color:#000 !important;
            }
            .clink:hover {
                color: #e28401 !important;
            }
        </style>
        <li><a href="tel:+92090078602" class="clink"><i class="fas fa-mobile"></i> Mobile: (+92) 0900 786 01</a></li>
        <li><a href="tel:+2123466798" class="clink"><i class="fas fa-phone"></i> Landline: (+92) 234 667 98</a></li>
        <li><a href="mailto:abc@gmail.com" class="clink"><i class="fas fa-envelope"></i> Email: someone@gmail.com</a></li>
        <p class="clink"><i class="fas fa-map-marker-alt"></i> Office: 11-C, South Seaview Avenue, Main Sunset Boulevard,
        Phase 2, Defence Housing Authority Karachi.</p>
    </ul>
    <!-- Map Card  -->
    <div class="card bg-dark text-white">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14459.192912314025!2d67.13101244006717!3d25.040920635905934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb345d53689f069%3A0x66248018620f4a5!2sGarden%20City%20Garden%20City%20Scheme%2045%20Taiser%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1692865614075!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

    <div class="second">
        <h3>What you can expect:</h3>
    <ul>
        <li>When contacting us, it is best to be prepared with all the documents that would help us to give you advice;</li>
        <li>Upon contacting us, you may wish for a preliminary legal opinion and/or case evaluation. In
            this, our firm explore the merits of your case, our legal strategy that we wish to adapt for
            your case, the possible steps for remedy, and the reasonable chances of success, and timelines.
        We also let you know fee estimates for each of the steps.</li>
    </ul>
    </div>
</div>

<!-- Form  -->
<div class="form-container">
    <h3>Book An Appointment/Make An Inquiry</h3>
    <!-- Form start  -->
    <form action="contact.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <h3>Name <span style="color: #e28401;">*</span></h3>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <h3>Would you like to <span style="color: #e28401;">*</span></h3>
    <div class="form-check">
        <input type="checkbox" id="cheq1" class="form-check-input" name="check1[]" value="Book an appointment for an in-person meeting">
        <label for="cheq1" class="form-check-label">Book an appointment for an in-person meeting</label><br>
        <input type="checkbox" id="cheq2" name="check1[]" value="Book an appointment for a telephonic meeting">
        <label for="cheq2">Book an appointment for a telephonic meeting</label><br>
        <input type="checkbox" id="cheq3" name="check1[]" value="Book an appointment for video conferencing">
        <label for="cheq3">Book an appointment for video conferencing</label><br>
        <input type="checkbox" id="cheq5" name="check1[]" value="Make an inquiry">
        <label for="cheq5">Make an inquiry</label>
    </div>
    </div>

    <div class="form-group">
        <label for="phone"><h3>Phone <span style="color: #e28401;">*</span></h3></label>
        <input type="text" id="phone" class="form-control" name="phone">
    </div>

    <div class="form-group">
        <label for="email"><h3>Email <span style="color: #e28401;">*</span></h3></label>
        <input type="email" id="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <h3>Area <span style="color: #e28401;">*</span></h3>
    <div class="form-check">
        <input type="checkbox" id="cheq6" class="form-check-input" name="check2[]" value="Taxation and custom duties">
        <label for="cheq6" class="form-check-label">Taxation and custom duties:</label><br>
        <input type="checkbox" id="cheq7" name="check2[]"  value="Corporate and Commercial Law">
        <label for="cheq7">Corporate and Commercial Law</label><br>
        <input type="checkbox" id="cheq8" name="check2[]" value="Constitutional Law">
        <label for="cheq8">Constitutional Law</label><br>
        <input type="checkbox" id="cheq9" name="check2[]" value="Real Estate and Property Law">
        <label for="cheq9">Real Estate and Property Law</label><br>
        <input type="checkbox" id="cheq10" name="check2[]" value="Family Law">
        <label for="cheq10">Family Law</label><br>
        <input type="checkbox" id="cheq11" name="check2[]" value="Anti-Dumping Laws">
        <label for="cheq11">Anti-Dumping Laws</label><br>
        <input type="checkbox" id="cheq12" name="check2[]" value="Intellectual Property Law">
        <label for="cheq12">Intellectual Property Law</label><br>
        <input type="checkbox" id="cheq13" name="check2[]" value="Mediation">
        <label for="cheq13">Mediation</label><br>
        <input type="checkbox" id="cheq14" name="check2[]" value="White Collar Crime">
        <label for="cheq14">White Collar Crime</label><br>
        <input type="checkbox" id="cheq15" name="check2[]" value="Employment/Service Law">
        <label for="cheq15">Employment/Service Law</label><br>
        <input type="checkbox" id="cheq16" name="check2[]" value="Drug & Pharma Laws">
        <label for="cheq16">Drug & Pharma Laws</label><br>
        <input type="checkbox" id="cheq17" name="check2[]" value="Fast track service">
        <label for="cheq17">Fast track service</label><br>
        <input type="checkbox" id="cheq18" name="check2[]" value="Global Reach">
        <label for="cheq18">Global Reach</label><br>
        <input type="checkbox" id="cheq19" name="check2[]" value="Retainer">
        <label for="cheq19">Retainer</label><br>
        <input type="checkbox" id="cheq20" name="check2[]" value="Other">
        <label for="cheq20">Other</label>
    </div>
    </div>

    <div class="form-group">
        <h3>Message <span style="color: #e28401;">*</span></h3>
        <textarea id="message" rows="4" class="form-control" name="message"></textarea>
        <p>(please try to provide all the relevant facts important to your query, to help us review your matter thoroughly)</p>
    </div>

    <div class="form-group">
        <h3>How did you hear about us <span style="color: #e28401;">*</span></h3>
        <textarea id="message" rows="4" class="form-control" name="aboutus"></textarea>
    </div>
    <button type="submit" class="btn" name="submit">Submit</button>
    </form>
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