<?php
 
 $conter;
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
	  $conter++;
	  echo conter;
	  
}





?>