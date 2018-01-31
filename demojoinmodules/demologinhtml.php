<html>
<?php
	session_start();
	$depname=$_POST["depname"];
		$_SESSION['sdepname']=$depname;
	$username=$_POST["name"];
		$_SESSION['susername']=$username;
	$password=$_POST["password"];
		$_SESSION['spassword']=$password;

	if(($depname="IT")&&($username=="admin")&&($password=="ithod"))
	{
		echo nl2br("\n Login successly");
		
	}
	else
	{
		echo nl2br("\n Invalid username/password");
	}
	?>