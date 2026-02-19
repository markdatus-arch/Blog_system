<?php
    include 'connectiondb.php';

    $query = $conn->query("SELECT * from posts ORDER by created_at DESC ");
    // pinapakita niya yung latest na post dahil sa order by descending order
    //gumamit din ako ng prepare para iwas sql injection
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
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        echo "<div style='border:1px solid #000; padding:10px; margin:10px 0;'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>" . $row['created_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "No posts yet.";
}

$conn->close();



?>

<div id="postsContainer"></div>

     

      
    
</body>
  
</html>