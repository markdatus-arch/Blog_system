<?php
include "connectiondb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titlearea = $_POST['titlearea'] ?? '';
    $contentarea = $_POST['contentarea'] ?? '';

    if (!empty($titlearea) && !empty($contentarea)) {

        $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->bind_param("ss", $titlearea, $contentarea);

        if ($stmt->execute()) {
            echo "Saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

    } else {
        echo "All fields are required.";
    }
}
?>
