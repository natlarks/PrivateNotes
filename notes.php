

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
        <div id="addnoteform">
            <form class="login" method="post" action="php/addNote.php">
                <h2>Add Note</h2><br>

                <label><b>Category</b></label> 
                <br>   
                <select name="cats" id="cats">
                  <option value="No label">No label</option>
                  <option value="Grocery">Grocery</option>
                  <option value="Important Information">Important Information</option>
                  <option value="Account Password">Account Password</option>
                  <option value="Todo List">Todo List</option>
                </select>   
                <br><br>    

                <label><b>Title</b></label>    
                <input type="text" name="addTitle" class="acctInfo" id="addTitle" placeholder="Title"> 
                <br><br>

                <label><b>Note</b></label>    
                <textarea type="test" name="notecontent"  id="notecontent" placeholder="Walk the dog"></textarea>
                <br><br>
                <input type="hidden" value=1 name="account_id" />
                <input type="submit" name="notesubmit" id="notesubmit" class="submitinfo" value="Add Note">
            </form>
        </div>
        <div id="allnotes">
        <div id="addnote">
            <i class="fa fa-plus fa-5x"></i>
            <h2>Add Note</h2>

        </div>
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
