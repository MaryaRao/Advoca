<?php
session_start();
if (isset($_POST["pascodeBtn"])) {
    $enteredPasscode = $_POST["Passcode"];
    $correctPasscode = "032535";

    if ($enteredPasscode === $correctPasscode) {
        $_SESSION["AdminLoggedIn"] = true;
        echo "<script>window.location.href='AdminPanel.php';</script>";
    } else {
        echo "<script>alert('Invalid Passcode!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/navbarCarouselFooter.css">
    <!-- Font Awsome Link  -->
    <script src="https://kit.fontawesome.com/60229d941c.js" crossorigin="anonymous"></script>
    <title> Admin Login </title>
</head>

<style>
    /* <...Form Start...>  */
    .container-forms {
        height: 90vh;
        width: 100%;
        background: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form {
        position: absolute;
        max-width: 200px;
        width: 100%;
        padding: 30px;
        background-color: white;
        border-radius: 6px;
        border: 2px solid black;
    }

    .form-heading {
        font-size: 25px;
        font-weight: 800;
        font-family: sans-serif;
        text-align: center;
        color: black;
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
        height: 80%;
        width: 165px;
        border: none;
        font-size: 13px;
        font-weight: 550;
        border-radius: 6px;
        text-align: center;
    }

    .field button {
        height: 40px;
        width: 100%;
        border: none;
        font-size: 13px;
        font-weight: 450;
        border-radius: 6px;
        background-color: transparent;
        color: #131313;
        border: 1px solid #131313;
        transition: all .3s ease;
    }

    .field button:hover {
        background-color: #2d3436;
        color: white;
        cursor: pointer;
        font-weight: 600;
    }

    .form1 input {
        outline: none;
        padding: 0 15px;
        border: 1px solid #CACACA;
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
        color: #8b8b8b;
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
        color: black;
    }

    .form-link a {
        color: #5c0931;
        text-decoration: none;
    }

    .form-content a:hover {
        color: #5c0931;
        text-decoration: underline;
    }

    .pas {
        position: absolute;
        bottom: 5px;
        right: 15px;
    }
    /* <...Form End...> */
</style>

<body>
    <div class="pas">
        <h3 class="text-center text-muted">Passcode is "032535"</h3>
    </div>
<div class="home">
    <section class="container-forms">
        <div class="login form">
            <div class="form-content">
                <header class="form-heading">Please Enter Passcode</header>
                <form action="#" class="form1" method="POST">
                <div class="field input-field">
                            <input type="password" placeholder="Passcode..." name="Passcode" class="password">
                            <i class="fa-solid fa-eye-slash hide"></i>
                        </div>
                    <div class="field button-field">
                        <button type="submit" value="submit" name="pascodeBtn">Enter</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<!-- <.------------------------------------------------ // Page End \\ ------------------------------------------.> --->
<!-- Js Link  -->
<script src="../law/assets/js/form.js"></script>
<script src="/AdminCssJs/java.js"></script>
</body>
</html>
