<?php
include "connectiondb.php"; // ✅ IMPORT DATABASE CONNECTION

if(isset($_POST['title']) && isset($_POST['content'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);

    if($stmt->execute()){
        echo "Saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

}
?>
