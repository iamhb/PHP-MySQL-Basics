<!DOCTYPE html>
<html>
<?php
	<? include 'rollno.php';
	$hello="820415205016";
	$rollno=str_split($hello);
	for($i=0;$i<=11;$i++)
	{
		echo nl2br("\n   $rollno[$i]");
	}


?>


</html>>