<!-- Signup Php Start  -->
<?php
include "../admin panel/conn.php";
if(isset($_POST['signBtn'])) {
    $signName = $_POST['signName'];
    $signEmail = $_POST['signEmail'];
    $signPassword = $_POST['signPassword'];

    // Hashed Password 
    $hashedPwd = password_hash($signPassword, PASSWORD_DEFAULT);
    
    $emailSql = "SELECT COUNT(*) AS emailCount FROM `user_log_sign` WHERE EMAIL = '$signEmail' ";
    $emailExist = mysqli_query($conn, $emailSql);
    $row = mysqli_fetch_assoc($emailExist);
    
    if(!empty($row) && $row['emailCount'] > 0){
        echo "<script>alert('Email address already exists. Please use a different email.');</script>";
    } else {
        $sql = "INSERT INTO `user_log_sign`(`Username`, `Email`, `Password`) VALUES ('$signName', '$signEmail','$hashedPwd')";
        $run = mysqli_query($conn, $sql);
        if($run) {
            echo "<script> alert('Signup Successful!');
                  window.location.href='index.php'; </script>";
        } else {
            echo "<script> alert('Error!') </script>";
        };
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/navbarCarouselFooter.css">
    <!-- Font Awsome Link  -->
    <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
    <title> Signup </title>
</head>

<style>

    /* <...Form Start...>  */
    * {
        margin: 0;
        padding: 0;
    }
    .container-forms {
        height: 100vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        column-gap: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: none; */
        background-image: url(./assets/images/formban.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        z-index: -1;
    }
    .container-forms::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .form {
        position: absolute;
        max-width: 275px;
        height: 45%;
        padding: 60px 20px;
        background-color: transparent;
        backdrop-filter: blur(20px);
        border-radius: 6px;
        border: 2px solid white;
        z-index: 999;
    }

    .form-heading {
        font-size: 25px;
        font-weight: 600;
        font-family: sans-serif;
        text-align: center;
        color: white;
    }

    .form1 {
        margin-top: 30px;
    }

    .form1 .field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 20px;
    }

    .form1 input {
        height: 75%;
        width: 242px;
        border: none;
        font-size: 13px;
        font-weight: 550;
        border-radius: 6px;
    }

    .field button {
        height: 40px;
        width: 100%;
        font-size: 13px;
        font-weight: 450;
        border-radius: 6px;
        background-color: transparent;
        color: white;
        border: 2px solid white;
        font-weight: 550;
        transition: all .3s ease;
    }

    .field button:hover {
        background-color: #e28401;
        color: white;
        cursor: pointer;
        font-weight: 600;
        border-color: #e28401;
    }

    .form1 input {
        outline: none;
        padding: 0 15px;
        border: 1px solid white;
        background: none;
        color: white;
    }
    .form1 input:hover {
        border-color: #e28401;
    }

    .form1 input:focus {
        border-bottom-width: 2px;
    }

    .hide {
        position: absolute;
        top: 40%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 12px;
        color: white;
        cursor: pointer;
        padding: 5px;
    }

    .form-link {
        text-align: center;
        border-top: 10px;
        margin-top: 5px;
    }

    .form-link span,
    .form-link a {
        font-size: 15px;
        font-weight: 400;
        color: white;
    }

    .form-link a {
        color: #e28401;
        text-decoration: underline;
    }

    .form-content a:hover {
        color: #ffffff;
    }

    .close {
        position: absolute;
        top: 18px;
        left: 20px;
        cursor: pointer;
    }

    .close a i {
        font-size: 18px;
        color: white;
        transition: 0.3s ease;
    }
    .close  a i:hover {
        color: #e28401;
    }

    /* <...Form End...> */
</style>

<body>
<!-- Forms  -->
<div class="home">
    <section class="container-forms">
        <!-- Login Form  -->
            <div class="login form">
                <div class="form-content">
                    <header class="form-heading">SignUp</header>
                    <div class="close">
                        <a href="index.php"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <form action="#" class="form1" method="POST">
                        <div class="field input-field">
                            <input type="text" placeholder="UserName..." name="signName" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email..." name="signEmail" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password..." name="signPassword" class="password">
                            <i class="fa-solid fa-eye-slash hide"></i>
                        </div>
                        <div class="field button-field">
                            <button type="submit" value="submit" name="signBtn">SIGNUP</button>
                        </div>
                    </form>
                    <div class="form-link">
                    <span>Don't have an account? <a href="login.php"><span>Login</span></a></span>
                    </div>
                </div>
            </div>
    </section>
</div>

<!-- <.------------------------------------------------ // Page End \\ ---------------------------------------------.> --->
<!-- Js Link  -->
<script src="./assets/js/form.js"></script>
</body>
</html>