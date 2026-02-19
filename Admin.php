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
       <form id="myForm">
            <input type="text" id="titlearea" name="title" required>
            <textarea id="contentarea" name="contentarea" required></textarea>
            <button id="postbtn" type="submit">post</button>
       </form>
    </div>

    <div id="result"></div>

    </div>
    
    
</body>
<script src="script.js">



</script>
</html>