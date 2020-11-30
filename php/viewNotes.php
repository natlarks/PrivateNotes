<?php

include('dbConfig.php');

$sql = "SELECT note_id, title, content, category FROM notes WHERE account_id=? ORDER BY date_created";
if ($_POST["catsSort"] == "Alphabetically") {
    $sql = "SELECT note_id, title, content, category FROM notes WHERE account_id=? ORDER BY title";
}

else if ($_POST["catsSort"] == "Category") {
    $sql = "SELECT note_id, title, content, category FROM notes WHERE account_id=? ORDER BY category";
}

$account_id = 1;

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