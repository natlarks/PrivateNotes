<?php
/**********************************
 *                                *
 *       Code to add note         *
 *                                *
 **********************************/


include('dbConfig.php');

print_r($_POST);

$cats = array("No label", "Grocery", "Important Information", "Account Passwords", "Todo List"); 
  
if (!in_array($_POST['cats'], $cats))  {
	echo '<script>alert("Category is not valid. Please try again.");
	window.location.href="../notes.php"</script>';
	exit;
}

$category = filter_var($_POST['cats'], FILTER_SANITIZE_STRING);
$title = filter_var($_POST['addTitle'], FILTER_SANITIZE_STRING);
$content = filter_var($_POST['notecontent'], FILTER_SANITIZE_STRING);

if ($title === "") {
	echo '<script>alert("Title can not be blank. Please try again.");
	window.location.href="../notes.php"</script>';
	exit;
}

print_r($_POST['account_id']);
print_r($title);
print_r($content);
print_r($category);

$sql = "INSERT INTO notes (account_id, title, content, category) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("ssss", $_POST['account_id'], $title, $content, $category);
$stmt->execute();
$stmt->close();
?>