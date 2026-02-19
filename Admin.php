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
       <form id="myForm" method="POST">
            <input type="text" id="titlearea" name="titlearea" required>
            <textarea id="contentarea" name="contentarea" required></textarea>
            <button type="submit" name="sbmtBtn">post</button>
       </form>

       
    </div>

    <div id="result"></div>
    <div>
        <table>
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </thead>
            <tbody>
                <?php
                    $registered_sql = "SELECT * FROM posts";
                    $registered_result = mysqli_query($conn, $registered_sql);

                    if (mysqli_num_rows($registered_result) > 0) {
                        while ($row = mysqli_fetch_assoc($registered_result)){
                            echo "<tr>";
                            echo "<td>". $row['id'] . "</td>";
                            echo "<td>". $row['title'] ."</td>";
                            echo "<td>". $row['content'] ."</td>";
                            echo "<td>". $row['created_at'] ."</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    
    
</body>
<script src="script.js">



</script>
</html>