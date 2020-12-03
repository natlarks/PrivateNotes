<?php
/**********************************
 *                                *
 *       Code to add note         *
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

$title = filter_var($_POST['addTitle'], FILTER_SANITIZE_STRING);
$content = filter_var($_POST['notecontent'], FILTER_SANITIZE_STRING);
$category = filter_var($_POST['cats'], FILTER_SANITIZE_STRING);

if ($title === "") {
	echo '<script>alert("Title can not be blank. Please try again.");
	window.location.href="../notes.php?email='.$email.'"</script>';
	exit;
}

$sql = "INSERT INTO notes (email, title, content, category) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("ssss", $email, $title, $content, $category);
$stmt->execute();
$stmt->close();

header("Location: ../notes.php?email=".$_GET['email']);
?>