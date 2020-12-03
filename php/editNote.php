<?php
/**********************************
 *                                *
 *       Code to edit note         *
 *                                *
 **********************************/


include('dbConfig.php');


$cats = array("No label", "Grocery", "Important Information", "Account Passwords", "Todo List"); 
$email=$_GET['email'];
  
if (!in_array($_POST['cats'], $cats))  {
	echo '<script>alert("Category is not valid. Please try again.");
	window.location.href="../notes.php?email='.$email.'"</script>';
	exit;
}

$category = filter_var($_POST['cats'], FILTER_SANITIZE_STRING);
$title = filter_var($_POST['editTitle'], FILTER_SANITIZE_STRING);
$content = filter_var($_POST['notecontent'], FILTER_SANITIZE_STRING);

if ($title === "") {
	echo '<script>alert("Title can not be blank. Please try again.");
	window.location.href="../notes.php?email='.$email.'"</script>';
	exit;
}

$sql = "UPDATE notes SET title = ?, content = ?, category = ? WHERE note_id = ?";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("ssss", $title, $content, $category, $_POST['note_id']);
$stmt->execute();
$stmt->close();
$email=$_GET['email'];
echo '<script>window.location.href="../notes.php?email='.$email.'"</script>';
?>