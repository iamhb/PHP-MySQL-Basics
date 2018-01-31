<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
</head>
<?php
	
	session_start();
	//$input=$_POST["t1"];
	//echo $input;
	$depname=$_SESSION['depname'];
	echo nl2br("\n");

	if(isset($_POST['submit']))
	{
		echo "  vanthuchaa";
	}
		if(isset($_POST['admin']))
		{
		echo "  vanthuchaa";
		echo "depname".$depname;
	$pass=$_POST['adminpass'];
	echo $pass;
		}
?>
<body>
  <p align="center">&nbsp;</p>

  <p align="center"><strong><font face="Candara" size="6"><u>Admin Login</u></font></strong></p>
<form action="" method="post" name="Admin Login" enctype="multipart/form-data">
  <p align="center"><font size="5">Enter Password:</font>
  &nbsp; <input name="adminpass" id="adminpswd" type="password" size="20" maxlength="15"></p>

  <p align="center"><input name="admin" width="40" height="30" id="admin" type="submit" value="Admin Login"></p>
  <p align="center">&nbsp;</p>
  </form>
</body>

</html>