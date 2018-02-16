<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
      	 	$pass=$_POST['adminpass'];
        	 if($pass=="admin")
         		{
         			header("location: depchoose.php");
         		}	
         	 else
         		{
         			echo "<script>alert('Invalid Password')</script>";
         		}
        }
?>

<html>
<head>
  <meta charset="utf-8">

  <title>Admin Login</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
</head>
<body>
  <p align="center">&nbsp;</p>

  <p align="center"><strong><font face="Candara" size="6"><u>Welcome Admin</u></font></strong></p>

<form action="" method="post" name="Admin Login" enctype="multipart/form-data">
  <p align="center"><font size="5">Enter Password:</font>
    &nbsp; <input name="adminpass" id="adminpass" type="password" size="20" maxlength="16"></p>

  <p align="center"><input name="admin login" width="40" height="30" id="admin" type="submit" value="Admin Login"></p>

  <p align="center">&nbsp;</p>
  </form>
</body>
</html>