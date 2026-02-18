<?php
include 'connectiondb.php';

         
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
    <div class="postContainer">
       <form action="POST" method="">
            <input type="text" id="text_box_title">
            <input type="text" id="text_box_Content">
            <button id="postbtn">post</button>
       </form>
    </div>

    <div id="post_page">

    </div>
    
</body>
<script src="script.js"></script>
</html>