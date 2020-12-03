<?php
/**********************************
 *                                *
 *       Code to login user       *
 *                                *
 **********************************/


include('dbConfig.php');

// Sanitizes email and makes sure it is valid format
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo '<script>alert("Not a valid email address. Please try again.");
	window.location.href="../index.php"</script>';
	exit;
}

// Makes sure email is already registered
$sql = "SELECT password FROM accounts WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($passHash); 
if ($stmt->num_rows() == 0) {
	echo '<script>alert("Email address is not registered. Please sign up for an account.");
	window.location.href="../index.php"</script>';
	exit;
}
elseif ($stmt->num_rows() == 1) {
	$stmt->fetch();    
}
// Sanitizes password and makes sure the password and password confirmation match
$password = filter_var($_POST['password'], FILTER_SANITIZE_ENCODED);
if (!password_verify($password, $passHash)) {
	echo '<script>alert("Incorrect password. Please try again.");
	window.location.href="../index.php"</script>';
	exit;
} 
$stmt->close();

echo '<script>window.location.href="../notes.php?email='.$email.'"</script>';
?>