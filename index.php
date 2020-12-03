

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
        <form class="login logindiv" method="post" action="php/login.php"> 
            <h2>Log In</h2><br>   

            <label><b>Email Address</b></label>    
            <input type="text" name="email" id="email" class="acctInfo" placeholder="Email Address">    
            <br><br>    

            <label><b>Password</b></label>    
            <input type="Password" name="password" id="password" class="acctInfo" placeholder="Password"> 
            <br><br>     

            <a id="forgot" href="javascript:resetPW()">Forgot password?</a>    
            <br><br>    

            <input type="submit" name="log" id="log" class="submitinfo" value="Log In">
        </form> 

        <form class="login signup" method="post" action="php/register.php">
            <h2>Sign Up</h2><br>

            <label><b>Email Address</b></label>    
            <input type="text" name="email" id="email" class="acctInfo" placeholder="Email Address">    
            <br><br>    

            <label><b>Password</b></label>    
            <input type="Password" name="password" class="acctInfo" id="password" placeholder="Password"> 
            <br><br>

            <label><b>Confirm Password</b></label>    
            <input type="Password" name="confirmPassword" class="acctInfo" id="confirmPassword" placeholder="Password"> 
            <br><br>

            <label><b>Security Question</b></label>    
            <input type="text" name="secQuestion" class="acctInfo" id="secQuestion" placeholder="Favorite band in high school?"> 
            <br><br>

            <label><b>Answer</b></label>    
            <input type="password" name="secAnswer" class="acctInfo" id="secQuestion" placeholder="Blink 182"> 
            <br><br>

            <input type="submit" name="register" id="register" class="submitinfo" value="Register">
        </form>  
        <div id="resetPWForm"> 
            <form class="login" method="post" action="php/resetPW.php">
                <h2>Reset</h2><br>

                <label><b>Email Address</b></label>    
                <input type="text" name="email" id="emailReset" class="acctInfo" placeholder="Email Address">    
                <br><br>    

                <input type="submit" name="reset" id="reset" class="submitinfo" value="Reset">
            </form>     
        </div> 
    </div>   
    <br>

    <div class="switchForms">
        <div class="logindiv">
            Need an account? <a href="javascript:toRegister()">Sign Up</a>     
        </div>  
        <div class="signup">
            Have an account? <a href="javascript:toLogin()">Log In</a>     
        </div>
    </div> 

      

</body>    
</html>     
