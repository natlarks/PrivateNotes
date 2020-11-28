

<!DOCTYPE html>    
<html>    
<head>    
    <title>Private Notes</title>    
    <link rel="stylesheet" type="text/css" href="css/notes.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>    
<body>

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
                    echo "<div class='note'>
                        <div class='title'>".$title."
                            <span class='deleteNote'>
                                <i class='fa fa-times'></i>
                            </span>
                            <span class='editNote'>
                                <i class='fa fa-edit'></i>
                            </span>
                            
                        </div>
                        <div class='category'>".$category."</div>
                        <div class='content'>".$content."</div>
                    </div>";
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
