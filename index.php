
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>RPS Game - Login</title>
</head>
<body>
	<h1> Welcome to RPS Game</h1>
<h3>Rock-Paper-Scissors Game</h3>

<form name="loginform" onSubmit="return validateForm();" action="game.php" method="post">
 <div class="imgcontainer">
  </div>

    <p class="one"><label><b>Username:</b></label></p>
    <input type="text" name="usr" placeholder="Username"> 
    <p class="two"><label><b>Password:</b></label></p>
    <input type="password" name="pword" placeholder="Password">
    </br> </br>
    <button type="submit">Login</button>
</form>

<script>
    function validateForm() {
        var un = document.loginform.usr.value;
        var pw = document.loginform.pword.value;
        var username = "username"; 
        var password = "password";
        if ((un == "username") && (pw == "password")) {
            return true;
        }
	if (( un == "" ) && ( pw == "" )) {
    	alert("Username and password are required.");
    	return false;
    	}
	if ( un == "" ) {
    	alert("Username is required.");
    	return false;
    	}
	if ( pw == "" ) {
    	alert("Password is required.");
    	return false;
    	}
        else {
            alert ("Incorrect Username or Password.");
	    document.loginform.reset();
            return false;
	    
        }
  }
</script>
</body>
</html>
