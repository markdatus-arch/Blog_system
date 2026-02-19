<?php
include "connectiondb.php";

$result = $conn->query("SELECT * FROM posts ORDER BY id DESC");

while($row = $result->fetch_assoc()){
    echo "<div class='post'>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . htmlspecialchars($row['content']) . "</p>";
    echo "</div>";
}
?>
