

<!DOCTYPE html>
<html>
<head>
<title>Dr. Chuck's Rock, Paper, Scissors Game</title>
<link rel="stylesheet" href="game.css">
</head>
<body>
<div class="container">
<h1>Rock Paper Scissors</h1>

<p class="one"><label><b>Click "Try It" to enter your Name :</b></label>
<button onclick="myFunction()">Try it</button>
<form method="post">
<select name="human">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
</select>
<input type="submit" value="Play">
<input type="submit" name="logout" value="Logout">
</form>



<pre>
Please select a strategy and press Play.
</pre>
</div>

<script>
function myFunction() {
  var person = prompt("Please enter your name", "");
  if (person != null) {
    document.getElementById("demo").innerHTML =
    "Welcome. " + person;
  }

   if ( person == "" ) {
    alert("Name parameter missing.");
    return false;
    }
}
</script>
</body>
</html>
