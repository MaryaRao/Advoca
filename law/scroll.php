<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<style>
		  body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

         #review {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
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
            color: black;
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
/* 
        input[type="file"] {
            display: none;
        } */

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
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
<?php
include "../admin panel/conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Handle image upload
    $target_dir = "../admin panel/image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Image uploaded successfully, store its path in the database
        $user_image = $target_file;
    } else {
        // Image upload failed or not provided
        $user_image = null;
    }

    // SQL query to insert data into the userreview table
    $sql = "INSERT INTO userreview (name, email, rating, review, user_image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $name, $email, $rating, $review, $user_image);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Review submitted successfully!";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
	<!-- Review form -->
	<div class="container" id="review">
        <h1>Give Us a Review</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" name="name" required><br><br>
            
            <label for="email">Your Email:</label>
            <input type="email" name="email" required><br><br>
            
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
            
            <input type="submit" value="Submit Review">
        </form>
    </div>
  <!-- Review form end -->

</body>
</html>