<html>
<?php
	session_start();
	$s1depname=$_SESSION['sdepname'];
	$s1username=$_SESSION['susername'];
	$s1password=$_SESSION['spassword'];

	echo($s1username);
	echo $s1password;
	echo ("$s1depname");
	