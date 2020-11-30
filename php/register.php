<?php
/**********************************
 *                                *
 *     Code to register user      *
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

// Makes sure email is not already registered
$sql = "SELECT * FROM accounts WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows() > 0) {
	echo '<script>alert("Email address is already registered. Please log in. ");
	window.location.href="../index.php"</script>';
	exit;
}
$stmt->close();

// Sanitizes password and makes sure the password and password confirmation match
$password = filter_var($_POST['password'], FILTER_SANITIZE_ENCODED);
$confirmPassword = filter_var($_POST['confirmPassword'], FILTER_SANITIZE_ENCODED);
if (strcmp($password, $confirmPassword) !== 0) {
	echo '<script>alert("Passwords do not match. Please try again.");
	window.location.href="../index.php"</script>';
	exit;
}

$secQuestion = filter_var($_POST['secQuestion'], FILTER_SANITIZE_STRING);
$secAnswer = filter_var($_POST['secAnswer'], FILTER_SANITIZE_STRING);

// Insert new account into database with password hash.
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO accounts (email, password, sec_question, sec_answer) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("ssss", $email, $password, $secQuestion, $secAnswer);
$stmt->execute();
$stmt->close();
echo '<script>window.location.href="../index.php"</script>';
?>