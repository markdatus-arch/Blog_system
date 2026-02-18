<?php

include 'connectiondb.php';

$sql = "select * from post";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . $row['content'] . "</p>";
                echo "<small>" . $row['created_at'] . "</small>";
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "No posts found.";
        }
    ?>

      
    
</body>

</html>