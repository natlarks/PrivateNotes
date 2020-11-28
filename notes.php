

<!DOCTYPE html>    
<html>    
<head>    
    <title>Private Notes</title>    
    <link rel="stylesheet" type="text/css" href="css/notes.css"> 
    <script src="js/loginToggle.js"></script>    
</head>    
<body>

    <!-- <div id="privnotes">
        <h1>Private Notes</h1><br>
    </div> -->
    <div id="content">
        <div id="privnotes">
            <h1>Private Notes</h1><br>
        </div>
        <div id="allnotes">
        <?php
            $account_id = 1;
            include('php/dbConfig.php');
            $sql = "SELECT title, content, category FROM notes WHERE account_id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            $stmt->bind_param("i", $account_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($title, $content, $category); 
            if ($stmt->num_rows() > 0) {
                while ($stmt->fetch()) {
                    echo "<div class='note'>".$title."</div>";
                    // printf("%s\n%s %s\n", $title, $content, $category); 
                }
            }
        ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

</body>    
</html>     
