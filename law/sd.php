<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can link to a CSS file for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php
include "../admin panel/conn.php";

    // SQL query to fetch data from the userreview table
    $sql = "SELECT * FROM userreview";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop through the rows and display data in cards
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<div class="card-header">' . $row["name"] . '</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Rating: ';
            
            // Convert rating value to star icons
            $rating = intval($row["rating"]);
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $rating) {
                    echo '<i class="fas fa-star"></i>';
                } else {
                    echo '<i class="far fa-star"></i>';
                }
            }
            
            echo '</h5>';
            echo '<p class="card-text">' . $row["review"] . '</p>';
            if ($row["user_image"]) {
                echo '<img src="' . $row["user_image"] . '" alt="User Image" class="card-img" width="300px">';
            }
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No reviews found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
