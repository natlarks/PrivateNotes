<?php
/**********************************
 *                                *
 *     Code to delete a note      *
 *                                *
 **********************************/


include('dbConfig.php');

$sql = "DELETE FROM notes WHERE note_id = ?";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("s", $_POST['note_id']);
$stmt->execute();
$stmt->close();
header("Location: ../notes.php?email=".$_GET['email']);

?>