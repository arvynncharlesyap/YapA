<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title>Arvynn Charles Yap</title> 
  
    <style>
	h1{font-family:Algerian;}
        html {
    font-family: Arial; 
    } 
    body { 
	color:orange;
	text-align: center;
  	padding: 100px;
  	background-image: url(https://media.giphy.com/media/BHNfhgU63qrks/giphy.gif);
}
</style> 
</head> 
<body> 
<h1 style="font-size:430%;"><i>Guess the Number</i></h1> 
  
<p style="font-size:100%;">Try to guess the random generated number that ranges from 1 - 10. GOODLUCK!</p> 
  
<div class="form"> 
    <label for="guessField"><b>ENTER A GUESS:</b> </label> 
    <input type = "text" id = "guessField" class = "guessField"> 
    <input type = "submit" value = "SUBMIT GUESS" 
           class = "guessSubmit" id = "submitguess"> 
</div> 
  
<script type = "text/javascript"> 
  
    // random value generated 
    var y = Math.floor(Math.random() * 10 + 1); 
      
    // counting the number of guesses 
    // made for correct Guess 
    var guess = 1; 
      
    document.getElementById("submitguess").onclick = function(){ 
      
   // number guessed by user      
   var x = document.getElementById("guessField").value; 
if(x == y) 
{	 
alert("CONGRATULATIONS!!! you are right in "
			+ guess + " GUESS ");
} 

else  if (x == "") {
 alert("Missing guess parameter"); 
}
  else if(x == y) 
   {     
       alert("Congratulations - You are right"
               ); 
   } 
else if(x > y) 
   {     
       guess++; 
       alert("Your guess is too high"); 
   } 
else if(x < y) 
   {     
       guess++; 
       alert("Your guess is too low"); 
   } 

   else
   { 
       guess++; 
       alert("Your guess is not a number") 
   } 
}
</script>
<br>
<form action="index.php">
<input type="submit" value="Refresh">
</form>
</body> 
</html>                     
