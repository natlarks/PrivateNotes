<!DOCTYPE html>    
<html>    
<head>    
    <title>Private Notes</title>    
    <link rel="stylesheet" type="text/css" href="css/login.css"> 
    <script src="js/loginToggle.js"></script>    
</head>    
<body>

    <div id="privnotes">
        <h1>Private Notes</h1><br>
    </div>
    <div class="loginForm"> 

	<form class="login" method="post" action="">
        <h2>Enter new credentials</h2><br>
        <?php
            echo"<label id='secQuestion'><b>".$_GET['sec_question']."</b></label>";    
        ?>
        <input type="password" name="secAnswer" class="acctInfo" id="secQuestion" placeholder="Answer"> 
        <br><br>

        <label><b>Password</b></label>    
        <input type="Password" name="password" class="acctInfo" id="password" placeholder="Password"> 
        <br><br>

        <label><b>Confirm Password</b></label>    
        <input type="Password" name="confirmPassword" class="acctInfo" id="confirmPassword" placeholder="Password"> 
        <br><br>

        <input type="submit" name="register" id="register" class="submitinfo" value="Update password">
    </form> 
</div>
</body>
</html> 

<?php
include('php/dbConfig.php');


if ($_POST) {
    // Sanitizes password and makes sure the password and password confirmation match
    $password = filter_var($_POST['password'], FILTER_SANITIZE_ENCODED);
    $confirmPassword = filter_var($_POST['confirmPassword'], FILTER_SANITIZE_ENCODED);
    if (strcmp($password, $confirmPassword) !== 0) {
    	echo '<script>alert("Passwords do not match. Please try again.");
    	window.location.href="../index.php"</script>';
    	exit;
    }

    $secAnswer = filter_var($_POST['secAnswer'], FILTER_SANITIZE_STRING);
    $sql = "SELECT sec_answer FROM accounts WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("s", $_GET['email']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($sec_answer_correct); 
    if ($stmt->num_rows() == 0) {
        echo '<script>alert(Security answer is not correct. Please try again.");
        window.location.href="../index.php"</script>';
        exit;
    }
    else {
        $stmt->fetch();       
    }
    $stmt->close();

print_r($password);
    // Update password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE accounts SET password = ? WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("ss", $password, $_GET['email']);
    $stmt->execute();
    $stmt->close();
    header('Location: ../index.php');
}
?>