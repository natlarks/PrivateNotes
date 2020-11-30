

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

        
        <div id="sortNoteBtn">
            <a href="javascript:sortNotes()">
                <h3>Sort Notes</h3>
            </a>
        </div>
        <br>
        
        <div class="forms" id="addnoteform">
            <span class='closeForm'>
                <a href="javascript:hideForm('addnoteform')">
                    <i class="fa fa-times-circle fa-2x"></i>
                </a>
            </span>
            <form class="login" method="post" action="php/addNote.php">
                
                <h2>Add Note</h2><br>

                <label><b>Category</b></label> 
                <br>   
                <select name="cats" id="cats">
                  <option value="No label" selected>No label</option>
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
            <span class='closeForm'>
                <a href="javascript:hideForm('editNoteForm')">
                    <i class="fa fa-times-circle fa-2x"></i>
                </a>
            </span>
            <form class="login" method="post" action="php/editNote.php">
                <h2>Edit Note</h2><br>

                <label><b>Category</b></label> 
                <br>   
                <select name="cats" id="catsEdit">
                  <option value="No label" selected>No label</option>
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
            <span class='closeForm'>
                <a href="javascript:hideForm('deleteNoteForm')">
                    <i class="fa fa-times-circle fa-2x"></i>
                </a>
            </span>
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
        <div class="forms" id="sortNoteForm">
            <span class='closeForm'>
                <a href="javascript:hideForm('sortNoteForm')">
                    <i class="fa fa-times-circle fa-2x"></i>
                </a>
            </span>
            <form class="login" method="post" action="">
            
                <h2>Sort Notes</h2>
                
                <label><b>Order by:  </b></label> 
               
                <select name="catsSort" id="catsSort" >
                  <option value="Choose option" selected>Choose option</option>
                  <option value="Date created">Date created</option>
                  <option value="Alphabetically">Alphabetically</option>
                  <option value="Category">Category</option>
                </select> 
                <br>
                <br>

                <input type="hidden" value=1 name="account_id" />
                <input type="hidden" value=1 name="note_id" id="noteIDSort" />
                <input type="submit" name="sortNote" id="sortNote" class="submitinfo" value="Sort">
                
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
            
                include('php/viewNotes.php');
                
            ?>
        </div>
    </div>

</body>    
</html>     
