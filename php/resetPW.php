<?php
/**********************************
 *                                *
 *    Code to reset password      *
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
$sql = "SELECT sec_question FROM accounts WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sec_question); 
if ($stmt->num_rows() == 0) {
	echo '<script>alert("Email address is not registered. Please create an account. ");
	window.location.href="../index.php"</script>';
	exit;
}
else {
	$stmt->fetch(); 
	
}

	
header('Location: ../verifiedReset.php?sec_question='.$sec_question.'&email='.$email.'');
$stmt->close();

?>