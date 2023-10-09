<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Affidavit</title>
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
    <!-- FontAwsome Link  -->
    <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="./assets/css/style.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature-pad.css">
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

<style>

    .containerForm {
            /* background-color: #fffff; */
            background-image: url(./assets/images/affidavit_background.jpg);
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;
            
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			overflow-x: wrap;
        }
        input{
            color:#000;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* .signature-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        } */

        canvas {
            border: 1px solid #ccc;
        }

        .btn-clear-signature {
            margin-top: 10px;
        }
        b{
            font-size: 20px;
            font-weight: bold;
        }
 
	/* // ---- ----- //  */
</style>

<body>

<!-- Loader -->
<!-- <div class="fh5co-loader"></div> -->
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
					<li class="items"><a href="contact.php">Contact Us</a></li>
					<li class="items active"><a href="affidavit.php">Affidavit</a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</nav>
</div>
<!-- // ----- ------ //  -->

<?php
include "../admin panel/conn.php";

// Handle saving the signature images to files
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $date = $_POST["date1"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $statement = $_POST["statement"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $date2 = $_POST["date2"];
    $lName = $_POST["Lname"];
    $aName = $_POST["Aname"];
    $country1 = $_POST["country1"];
    $date3 = $_POST["date3"];
    // Get the signature data for both signatures
    $signatureData1 = $_POST['signatureData1'];
    $signatureData2 = $_POST['signatureData2'];
    $destinationFolder = "../admin panel/image/"; // Specify the destination folder here

    // Generate unique file names for both signatures
    $fileName1 = uniqid() . '_signature1.png';
    $fileName2 = uniqid() . '_signature2.png';

    // Save the signature images to the destination folder
    $filePath1 = $destinationFolder . $fileName1;
    $filePath2 = $destinationFolder . $fileName2;

    $imageData1 = base64_decode(str_replace('data:image/png;base64,', '', $signatureData1));
    $imageData2 = base64_decode(str_replace('data:image/png;base64,', '', $signatureData2));

    if (file_put_contents($filePath1, $imageData1) && file_put_contents($filePath2, $imageData2)) {
        // echo 'Signature images saved successfully.';
    } else {
        echo 'Error saving the signature images.';
    }
}

// Handle inserting the signature data into the database
if (isset($_POST["signatureData1"]) && isset($_POST["signatureData2"])) {
    $signatureData1 = $_POST["signatureData1"];
    $signatureData2 = $_POST["signatureData2"];

//     // SQL query to insert the signature data into a table
    $sql = "INSERT INTO `affidavit`(`date1`, `affiant_name`, `age`, `email`, `address`, `statement`, `city`, `country`, `date_of_submission_to_lawyer`, `country1`, `signature_image`, `signature_image1`, `date_of_submission_to_court`,`lawyerName`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssssssssssss", $date, $name, $age, $email, $address, $statement, $city, $country, $date2, $country1, $signatureData1, $signatureData2, $date3,$lName);
        if ($stmt->execute()) {
            echo "<script>alert('Affidaivt has been submitted. You will soon receive via email.. thankyou!')
            </script>";
            // header("Location: index.php");
        } else {
            echo "Error inserting signature data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }

}
$conn->close();
?>
  
<div class="container containerForm" style="margin: 50px auto;">
<img src="./assets/images/stamp.jpg" width="100%" height="400px" alt="stamp">
    <h2 class="text-center">AFFIDAVIT</h2>
    <p class="text-center">(SWORN STATEMENT)</p>
    <form id="signature-form" method="POST">
    <div class="form-row">
    <div class="form-group col-md-4">
      <b>Date: </b>
      <input type="text" id="datepicker1" name="date1">
    </div>
    <div class="form-group col-md-8" style="visibility:hidden;">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group">
    <b>My legal name is: </b>
    <input type="text" placeholder="Affiant Name" name="name"> <b>and acknowledge I am:</b>
  </div>
</div>
<div class="form-row">
<div class="form-group">
<ul>
<li> 
    <b>Age: </b>
    <input type="text" placeholder="Age" name="age">
</li>
<br>
<li> 
    <b>Email: </b>
    <input type="text" placeholder="Enter Email" name="email">
</li>
<br>
<li>
    <b> Residence: </b>
    <input type="text" placeholder="Enter address" name="address">
</li>
</ul>
  </div>
</div>
<div class="form-row">
  <div class="form-group" style="display:flex;align-items:center;">
  Being duly sworn, hereby swear under oath that: 
  <textarea name="statement" id="" cols="50%" rows="1">Sworn Statement</textarea>
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
   <b>City of:</b> <input type="text" name="city">
</div>
<div class="form-group">
   <b>Country of:</b> <input type="text" name="country">
  </div>
</div>
<div class="form-row">
    <div class="form-group">
    On      <input type="text" id="datepicker2" name="date2"> before me, <input type="text" placeholder="Lawyer's Name" name="Lname">, personally appeared <input type="text" placeholder="Affiant's Name" name="Aname"> who proved to me on the basis of satisfactory evidence to be the person whose name is subscribed to the within instrument and acknowledged to me that they executed the same in their authorized capacity, and that by their signature on the instrument the person(s), or the entity upon behalf of which the person(s) acted, executed the instrument. 
    </div>
</div>
<div class="form-row">
    <div class="form-group">
    <p>I certify under PENALTY OF PERJURY under the laws of the City of <input type="text" placeholder="Enter Country" name="country1"> that the foregoing paragraph is true and correct. </p>
    <p>WITNESS my hand and official seal. </p>
    </div>

</div><div class="form-row">
        <div class="form-group">
        
    <div id="signature-pad1" class="signature-pad">
        <canvas></canvas>
        <button id="clear-button1">Clear</button>
    </div>
    <div id="signature-pad2" class="signature-pad">
        <canvas></canvas>
        <button id="clear-button2">Clear</button>
    </div>
    
        <input type="hidden" name="signatureData1" id="signature-data1">
        <input type="hidden" name="signatureData2" id="signature-data2">
      
        </div>
    </div>
    Date: <input type="text" id="datepicker3" name="date3">
    <br><br>
	<style>
		.abtn:hover{
			background: #e28401;
			color: #fff;
		}
	</style>
    <button class="abtn" name="submit" style="border:1px solid #e28401;padding:2px 40px" id="save-button">Submit</button>
    </form>
</div>
<div class="container" style="height:100px"></div>

<!-- AFFIDAVIT ENDS HERE -->

	
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
    <!-- Main -->
	<script src="./assets/js/main.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
<script> 

    $(document).ready(function () {
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
});

var canvas1 = document.querySelector("#signature-pad1 canvas");
        var signaturePad1 = new SignaturePad(canvas1);

        var canvas2 = document.querySelector("#signature-pad2 canvas");
        var signaturePad2 = new SignaturePad(canvas2);

        // Clear the signature pads
        document.getElementById("clear-button1").addEventListener("click", function () {
            event.preventDefault(); 
            signaturePad1.clear();
        });

        document.getElementById("clear-button2").addEventListener("click", function () {
            event.preventDefault(); 
            signaturePad2.clear();
        });

        // Handle form submission
        document.getElementById("save-button").addEventListener("click", function () {
            // Get the signature data for both signatures as base64-encoded images
            var signatureData1 = signaturePad1.toDataURL();
            var signatureData2 = signaturePad2.toDataURL();

            // Set the signature data in the respective hidden input fields
            document.getElementById("signature-data1").value = signatureData1;
            document.getElementById("signature-data2").value = signatureData2;

            // Submit the form via JavaScript (without redirecting)
            document.getElementById("signature-form").submit();
        });
</script>

</body>

</html>