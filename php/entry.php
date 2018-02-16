<?php
session_start();


   if($_SERVER["REQUEST_METHOD"] == "POST") 
         {
           $name=$_POST['adminname'];
          if(strpos($name, 'admin') !== false)
           {
            header("location: adminpass.php");
            }
          elseif(strpos($name, '8204')!== false)
           {
            $_SESSION['rollno']=$name;
            header("location: stud.php");
           }
           else
           {
            echo "<script>alert('Invalid Username')</script>";
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

  <p align="center"><strong><font face="Candara" size="6"><u>Welcome</u></font></strong></p>

<form action="" method="post" name="Admin Login" enctype="multipart/form-data">

  <p align="center"><font size="5">Enter ID:</font>
  &nbsp; <input name="adminname" id="admindep" type="text" size="20" maxlength="9"></p>



  <p align="center"><input name="admin login" width="40" height="30" id="admin" type="submit" value="Login"></p>

  <p align="center">&nbsp;</p>
  </form>
</body>
</html>