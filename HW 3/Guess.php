<form method = "post" action = Guess.php
 <label> Guess a number from 1-100.</label>
 <input type="text" name="name">
 <br/>
 <input type="submit" value="Submit">
</form>

<?php
session_start();
 
if(isset($_POST["name"]))
{
	if (!isset ($_SESSION["conter"]))
	{
		$_SESSION["conter"]=0; 
	}
	echo $_POST["name"];
	 
	if($_POST["name"]>54)
	{
		echo"Too High!";
	}

	else if($_POST["name"]<54)
	{
		echo "Too Low!";
	}

	else
	{
		echo "Correct!";
	}
	  $_SESSION["conter"]++;
	  echo $_SESSION["conter"];
	  
}





?>