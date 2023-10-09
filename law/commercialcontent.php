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
<nav class="fh5co-nav" role="navigation" style="background-color:transparent;">
	<div class="top-menu" style="padding:10px 0px">
		<div class="container">
			<div class="row" style="background-color:transparent;">
				<div class="col-xs-2">
					<div id="fh5co-logo" style="margin-top:-30px;"><a href="./index.php"><img src="./assets/images/logo.png" alt="" width="120px" style="object-fit:cover;"></a></div>
				</div>
			<div class="col-xs-10 text-right menu-1">
				<ul style="margin-top:20px;">
					<li class="items "><a href="./index.php">Home</a></li>
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
        
<!-- Content Start  -->
<div id="fh5co-project">
<div class="container">
	<div class="row animate-box">
		<div class="col-md-12 text-left fh5co-heading">
			<h1>Commercial Law</h1>
            <div class="row">
                <p class="col-md-8" style="text-align:justify;">Commercial law concerns the system of legal rules that define what conduct is classified as a Commercial and how the government may prosecute individuals that commit Commercials. Federal, state, and local governments all have penal codes that explain the specific Commercials that they prohibit and the punishments that Commercials may face. Individuals who violate federal, state, and local laws may face fines, probation, or incarceration. Lawsuits against Commercials are initiated by prosecuting attorneys who act on behalf of the government to enforce the law.</p>
                <img src="./assets/images/civil.jpg" alt="Free HTML5 Website Template by FreeHTML5.co"class="img-responsive col-md-4" width="40%">
            </div>
            <p>A Commercial is any act or omission of an act in violation of a law forbidding or commanding it. Most Commercials are defined by statute, and they vary tremendously across different states and counties. The Model Penal Code (MPC) provides a good overview of the most common types of Commercials, while the U.S. Code provides a list of all federal Commercials. For a list of Commercials in your state or local municipality, it is best to check your local penal code.</p>
            <p>While specific Commercial acts may vary by jurisdiction, they can be broadly characterized as “felonies” and “misdemeanors.” Felonies include more serious Commercials, like murder or rape, and are usually punishable by imprisonment of a year or more. Misdemeanors are less serious offenses and are punishable by less than a year of imprisonment or fines.</p>
            <h1>Prosecution of Commercials</h1>
            <p>Unless a Commercial is a strict liability Commercial (meaning that no particular mental state is required), statutes typically break Commercials down into two elements: an act (the “actus reus”) and a mental state (“mens rea”), such as knowingly or recklessly. In order to be convicted of a Commercial, a prosecutor must show that the defendant has met both of these elements. For example, larceny is the taking of the property of another with the intent to deprive them of it permanently. Thus, the defendant must have committed the act of taking the property and have done so with the mental intention to take the property of another (as opposed to believing that the property belonged to him).</p>
            <p>It is not enough for a prosecutor to suggest that the defendant committed a Commercial. Rather, the prosecutor is required to prove each and every element of a Commercial “beyond a reasonable doubt” in order for a defendant to be convicted. Police officers, prosecutors, and other government officials must also follow certain procedures in pursuing Commercial activity. This is because all citizens have certain constitutional rights that the government must respect and protect. If these rights are not respected, it may prevent a prosecutor from obtaining a conviction in a case. The United States Constitution sets forth these rights and the protections that are afforded to defendants. For instance, if a citizen is arrested for a suspected burglary, police officers may wish to question the individual in connection with the Commercial. However, the Fifth Amendment of the Constitution provides protections against self-incrimination, and cases such as Miranda v. Arizona, 384 U.S. 436 (1966), set forth the particular warnings, called Miranda rights, that police officers must provide before questioning can occur. The Fourth Amendment provides rules for searches and seizures by law enforcement, while the Sixth Amendment provides a right to a speedy trial, a right to an attorney, and certain rights related to the cross-examination of witnesses. Finally, the Eighth Amendment of the Constitution protects Commercial defendants from receiving punishment that is unusually cruel or excessive. A violation of a defendant's constitutional rights can lead to the exclusion of evidence from a Commercial trial, which can weaken or destroy the prosecution's case, or it may lead to the reversal of a conviction on appeal.</p>
		</div>
	</div>
</div>
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