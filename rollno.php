<!DOCTYPE html>
<html>
<?php

	$Conn=mysqli_connect('localhost','root','');
	if(!$Conn)
	{
		echo nl2br("\n not connected");
	}
	else
	{
		echo nl2br("\n connected");
	}
	if(!mysqli_select_db($Conn,'shiva'))
	{
		echo nl2br("not connected to shiva");
	}
	else
	{
		echo nl2br("connected to shiva database");
	}
	$temp=$_GET['rollno'];
	$sem=$_GET['sem'];
	$rollno=str_split($temp);
	
	for($i=0;$i<sizeof($rollno);$i++)	
		echo nl2br("\t   $rollno[$i]");

	 $branch_code=substr($temp, 6);
	 echo nl2br("\n $branch_code");
	 




	?>
	</html>