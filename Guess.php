<form method = "get" action = "Input.php"
 <label> Guess a number from 1-100.</label>
 <input type="text" name="name">
 <br/>
 <input type="submit" value="Submit">
</form>

<?php
 
 
if(isset($_GET["name"]))
{
	echo $_GET["name"];
	 
	if($_GET["name"]>54)
	{
		echo"Too High!";
	}

	else if($_GET["name"]<54)
	{
		echo "Too Low!";
	}

	else
	{
		echo "Correct!";
	}
	  
}





?>