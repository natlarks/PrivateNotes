

<!DOCTYPE html>    
<html>    
<head>    
    <title>Private Notes</title>    
    <link rel="stylesheet" type="text/css" href="css/notes.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="js/loginToggle.js"></script>    

</head>    
<body>

    <div id="content">
        <div id="privnotes">
            <h1>Private Notes</h1><br>
        </div>
        <div class="forms" id="addnoteform">
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
                <textarea type="test" class="formContent" name="notecontent"  id="notecontent" placeholder="Walk the dog"></textarea>
                <br><br>
                <input type="hidden" value=1 name="account_id" />
                <input type="submit" name="notesubmit" id="notesubmit" class="submitinfo" value="Add Note">
            </form>
        </div>
        <div class="forms" id="editNoteForm">
            <form class="login" method="post" action="php/editNote.php">
                <h2>Edit Note</h2><br>

                <label><b>Category</b></label> 
                <br>   
                <select name="cats" id="catsEdit">
                  <option value="No label">No label</option>
                  <option value="Grocery">Grocery</option>
                  <option value="Important Information">Important Information</option>
                  <option value="Account Password">Account Password</option>
                  <option value="Todo List">Todo List</option>
                </select>   
                <br><br>    

                <label><b>Title</b></label>    
                <input type="text" name="editTitle" class="acctInfo" id="editTitle" placeholder="Title"> 
                <br><br>

                <label><b>Note</b></label>    
                <textarea type="test" name="notecontent" class="formContent" id="editnotecontent" placeholder="Walk the dog"></textarea>
                <br><br>
                <input type="hidden" value=1 name="account_id" />
                <input type="hidden" value=1 name="note_id" id="noteIDEdit" />
                <input type="submit" name="editNote" id="editNote" class="submitinfo" value="Edit Note">
            </form>
        </div>
        <div class="forms" id="deleteNoteForm">
            <form class="login" method="post" action="php/deleteNote.php">
                <div id="delMsg">
                <h2>Delete Note</h2>
                
                    <h3>Delete note '</h3><h3 id=deleteNoteTitle></h3><h3>'?</h3>
                </div>
                
                <input type="hidden" value=1 name="account_id" />
                <input type="hidden" value=1 name="note_id" id="noteIDDelete" />
                <input type="submit" name="deleteNote" id="deleteNote" class="submitinfo" value="Delete">
            </form>
        </div>
        <div id="allnotes">
            <a href="javascript:addNote()">
                <div id="addnote">
                    <i class="fa fa-plus fa-5x"></i>
                    <h2>Add Note</h2>

                </div>
            </a>
            <?php
            $account_id = 1;
            include('php/dbConfig.php');
            $sql = "SELECT note_id, title, content, category FROM notes WHERE account_id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            $stmt->bind_param("i", $account_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($note_id, $title, $content, $category); 
            if ($stmt->num_rows() > 0) {
                while ($stmt->fetch()) {
                    echo "<div class='note'>
                        <input type='hidden' value=".$note_id." name='note_id' />

                        <div class='title'>".$title."
                                <span class='deleteNote'>
                                <a href='javascript:deleteNote(".$note_id.", \"".$title."\")'>
                                    <i class='fa fa-times'></i>
                                </a>
                                </span>

                                <span class='editNote'>
                                <a href='javascript:editNote(".$note_id.", \"".$title."\", \"".$category."\", \"".$content."\")'>
                                    <i class='fa fa-edit'></i>
                            </a>

                                </span>
                            
                        </div>
                        <div class='category'>".$category."</div>
                        <div class='content'>".$content."</div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>

</body>    
</html>     
